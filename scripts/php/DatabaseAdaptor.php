<?php
class DatabaseConnection {

	private $DB;

	public function __construct() {
		$db = 'mysql:dbname=lobby_db;host=127.0.0.1';
		$user = 'root';
		$password = '';
			
		try {
			$this->DB = new PDO ( $db, $user, $password );
			$this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch ( PDOException $e ) {
			echo ('Error establishing Connection');
			exit ();
		}
	}

	// Arguments: Username [String], Password [String], Name [String]
	// Returns: True if Username is unique and successfully added to the database
	// Returns: False if Username is already in database
	public function register($realname, $username, $email, $password) {

		$username = htmlspecialchars($username);
		$realname = htmlspecialchars($realname);
		$email = htmlspecialchars($email);

		$sql = "SELECT username FROM users WHERE username = :username;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		if($stmt->rowCount() > 0) {
			return false;
		}

		$hash = password_hash($password, PASSWORD_DEFAULT);

		$email = $username . "@company.com";

		$sql = "INSERT INTO users(username, hash, name, email) VALUES(:username, :hash, :name, :email);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username, ':hash' => $hash, ':name' => $name, ':email' => $email) );

		return true;
	}


	// DOES THIS WORK WITH THE INCORRECT USERNAME??

	// Arguments: Username [String], Password [String]
	// Returns: The string "manager" if the user is a manager
	// Returns: The string "employee" if the user is a employee
	// Returns: False if the Username and Password are incorrect
	public function verifyLogin($username, $password) {
		$sql = "SELECT hash FROM users WHERE username = :username;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		$success = password_verify($password, $row['hash']);

		if($success) {
			$sql = "SELECT fk_username FROM managers WHERE fk_username = :username LIMIT 1;";
			$stmt = $this->DB->prepare( $sql );
			$stmt->execute( array(':username' => $username) );
			$row = $stmt->fetch( PDO::FETCH_ASSOC );

			if($stmt->rowCount() > 0) {
				return "manager";
			} else {
				return "employee";
			}
		} else {
			return "false";
		}
	}

	public function getName($user){
		$sql = "SELECT name FROM users WHERE username = :user;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':user' => $user) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		return $row;
	}

	public function getManagedEmployees($username) {
		$sql = "SELECT fk_username FROM group_members INNER JOIN (SELECT fk_group_name FROM managers WHERE fk_username = :username) managed_groups ON group_members.fk_group_name = managed_groups.fk_group_name;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$rows = $stmt->fetchAll( PDO::FETCH_ASSOC );

		return $rows;
	}

	public function getUsersIndividualEventsForWeek($username, $week, $year) {
		$weekStartEndArray = $this->getStartAndEndDate($week,$year);

		$sql = "SELECT * FROM events INNER JOIN ( SELECT fk_event_id AS event_id FROM event_individual_atendees WHERE fk_username = :username ) individual_events ON events.event_id = individual_events.event_id WHERE DATE(events.start_datetime) >= :start_datetime AND DATE(events.end_datetime) <= :end_datetime ORDER BY events.start_datetime;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username, ':start_datetime' => $weekStartEndArray["week_start"], ':end_datetime' => $weekStartEndArray["week_end"]) );
		$rows = $stmt->fetchAll( PDO::FETCH_ASSOC );

		return $rows;
	}

	public function getUsersGroupEventsForWeek($username, $week, $year) {
		$weekStartEndArray = $this->getStartAndEndDate($week,$year);

		$sql = "SELECT * FROM events INNER JOIN ( SELECT fk_event_id AS event_id FROM event_group_atendees INNER JOIN ( SELECT fk_group_name FROM group_members WHERE fk_username = :username ) user_groups ON event_group_atendees.fk_group_name = user_groups.fk_group_name ) user_group_events ON events.event_id = user_group_events.event_id WHERE DATE(events.start_datetime) >= :start_datetime AND DATE(events.end_datetime) <= :end_datetime ORDER BY events.start_datetime;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username, ':start_datetime' => $weekStartEndArray["week_start"], ':end_datetime' => $weekStartEndArray["week_end"]) );
		$rows = $stmt->fetchAll( PDO::FETCH_ASSOC );

		return $rows;
	}

	private function getStartAndEndDate($week, $year) {
  		$date = new DateTime();
  		$date->setISODate($year, $week);
  		$weekStartEnd['week_start'] = $date->format('Y-m-d');
  		$date->modify('+6 days');
  		$weekStartEnd['week_end'] = $date->format('Y-m-d');

  		return $weekStartEnd;
	}

	// getManagedGroups

	//GET LOCATIONS

	public function getGroups($username) {
		$sql = "SELECT fk_group_name AS group_name FROM group_members WHERE fk_username = :username;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );
		$rows = $stmt->fetchAll( PDO::FETCH_ASSOC );

		return $rows;
	}

	public function getLocations() {
		$sql = "SELECT location_name FROM locations;";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute();
		$rows = $stmt->fetchAll( PDO::FETCH_ASSOC );

		return $rows;
	}

	// Arguments: Username, Password
	// Returns: The string "manager" if the user is a manager
	// Returns: The string "employee" if the user is a employee
	// Returns: False if the Username and Password are incorrect
	public function createEmployeeEvent($eventName, $username, $startDateTime, $endDateTime, $location, $description) {
		
		$sql = "SELECT event_id FROM events WHERE (start_datetime <= :startDateTime AND end_datetime > :startDateTime) OR (start_datetime < :endDateTime AND end_datetime >= :endDateTime) OR (start_datetime >= :startDateTime AND end_datetime <= :endDateTime);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':startDateTime' => $startDateTime, ':endDateTime' => $endDateTime) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		if($stmt->rowCount() > 0) {
			return false;
		}

		$sql = "INSERT INTO events(event_name, start_datetime, end_datetime, fk_location, description) VALUES(:eventName, :startDateTime, :endDateTime, :location, :description);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':eventName' => $eventName, ':startDateTime' => $startDateTime, ':endDateTime' => $endDateTime, ':location' => $location, ':description' => $description) );

		$sql = "INSERT INTO event_individual_atendees(fk_event_id, fk_username) VALUES(LAST_INSERT_ID(), :username);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':username' => $username) );

		return true;
	}


	public function createGroupEvent($eventName, $groupName, $startDateTime, $endDateTime, $location, $description) {
	
		$sql = "SELECT event_id FROM events WHERE (start_datetime <= :startDateTime AND end_datetime > :startDateTime) OR (start_datetime < :endDateTime AND end_datetime >= :endDateTime) OR (start_datetime >= :startDateTime AND end_datetime <= :endDateTime);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':startDateTime' => $startDateTime, ':endDateTime' => $endDateTime) );
		$row = $stmt->fetch( PDO::FETCH_ASSOC );

		if($stmt->rowCount() > 0) {
			return false;
		}

		$sql = "INSERT INTO events(event_name, start_datetime, end_datetime, fk_location, description) VALUES(:eventName, :startDateTime, :endDateTime, :location, :description);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':eventName' => $eventName, ':startDateTime' => $startDateTime, ':endDateTime' => $endDateTime, ':location' => $location, ':description' => $description) );

		$sql = "INSERT INTO event_group_atendees(fk_event_id, fk_group_name) VALUES(LAST_INSERT_ID(), :group_name);";
		$stmt = $this->DB->prepare( $sql );
		$stmt->execute( array(':group_name' => $groupName));

		return true;
	}
}
?>