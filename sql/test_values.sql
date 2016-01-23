INSERT INTO users(username, realname, email, password) VALUES ("dvader", "Darth Vader", "dVader@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("dsidious", "Darth Sidious", "dSidious@aol.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("pamidala", "Padme Amidala", "pAmidala@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("hsolo", "Han Solo", "hSolo@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("cbacca", "Chew Bacca", "cBacca@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("bfett", "Boba Fett", "bFett@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("jhutt", "Jabba The Hutt", "jHutt@aol.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("daddyproblems", "Kylo Ren", "kRen@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("pdameron", "Poe Dameron", "pDameron@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, password) VALUES ("cdooku", "Count Dooku", "cDooku@gmail.com", "[Insert#HashEquivalent#]");


INSERT INTO lobbyist(username, realname, email, password) VALUES ("bbaggins", "Bilbo Baggins", "TheOneRing@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyist(username, realname, email, password) VALUES ("fbaggins", "Frodo Baggins", "IHateRings@aol.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyist(username, realname, email, password) VALUES ("sgamgee", "Samwise Gamgee", "SillyFrodo@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyist(username, realname, email, password) VALUES ("gwormtongue", "Grima Wormtongue", "GandalfFanClub@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyist(username, realname, email, password) VALUES ("theoneringllc", "The One Ring LLC", "contact@theoneringllc.com", "[Insert#HashEquivalent#]");


INSERT INTO issues(issue_name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Legalize Marijuana","1000000","2899","1","http://media.graytvinc.com/images/Marijuana+Vote.png", "bbaggins");
INSERT INTO issues(issue_name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Shut Down the National Security Agency","1","0","0","https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/National_Security_Agency.svg/2000px-National_Security_Agency.svg.png", "sgamgee");
INSERT INTO issues(issue_name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Universal Background Checks for All Gun Purchases","500000","4999","1","http://i.huffpost.com/gen/1132722/images/o-GUNS-IN-SCHOOLS-facebook.jpg", "theoneringllc");
INSERT INTO issues(issue_name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Term Limits for Members of Congress","200000","31723","5","https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Seal_of_the_United_States_Congress.svg/2000px-Seal_of_the_United_States_Congress.svg.png", "gwormtongue");


INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("dvader", "1", "2899"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("daddyproblems", "3", "4999"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("hsolo", "4", "8284"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cbacca", "4", "2774"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("jhutt", "4", "9778"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cdooku", "4", "10000"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("pamidala", "4", "887"); 




