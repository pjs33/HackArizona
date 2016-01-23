DROP TABLE IF EXISTS donations;
DROP TABLE IF EXISTS issues;
DROP TABLE IF EXISTS users;

CREATE TABLE users
(
	user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	realname VARCHAR(255) NOT NULL,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	is_lobbyist BOOLEAN NOT NULL,
	password VARCHAR(255) NOT NULL
);

CREATE TABLE issues 
(
	issue_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	goal_amount INT NOT NULL,
	current_amount INT NOT NULL,
	donors INT NOT NULL,
	picture VARCHAR(255) NOT NULL,
	fk_lobbyist_id INT NOT NULL,
	
	FOREIGN KEY (fk_lobbyist_id) REFERENCES users(user_id)
);

CREATE TABLE donations
(
	fk_user_id INT NOT NULL,
	fk_issue_id INT NOT NULL,
	money_amount INT NOT NULL,
	FOREIGN KEY (fk_user_id) REFERENCES users(user_id),
	FOREIGN KEY (fk_issue_id) REFERENCES issues(issue_id),
	
	CONSTRAINT donation PRIMARY KEY (fk_user_id, fk_issue_id)
);


