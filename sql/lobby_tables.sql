CREATE TABLE issues (
	issueID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	goal_amount INT NOT NULL,
	current_amount INT NOT NULL,
	donors INT NOT NULL,
	picture VARCHAR(255) NOT NULL,
	fk_lobbyistID VARCHAR(255) NOT NULL,
	
	FOREIGN KEY (fk_lobbyistID) REFERENCES lobbyist(lobbyistID)
);

CREATE TABLE donation
(
	fk_userID INT NOT NULL,
	fk_issueID INT NOT NULL,
	money_amount INT NOT NULL,
	FOREIGN KEY (fk_userID) REFERENCES users(userID),
	FOREIGN KEY (fk_issues) REFERENCES issues(issueID),
	
	CONSTRAINT donation PRIMARY KEY (fk_userID, fk_issueID)
);

CREATE TABLE users
(
	userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	realname VARCHAR(255) NOT NULL,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
);

CREATE TABLE lobbyist
(
	lobbyistID NOT NULL PRIMARY KEY AUTO_INCREMENT,
	lobbyist_name VARCHAR(255) NOT NULL;
);
