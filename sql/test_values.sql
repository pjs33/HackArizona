INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("dvader", "Darth Vader", "dVader@gmail.com", "9497 Fawn Lane", "Tucson", "Arizona", "85719", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("dsidious", "Darth Sidious", "dSidious@aol.com", "273 Valley Road", "Tucson", "Arizona", "85721", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("pamidala", "Padme Amidala", "pAmidala@gmail.com", "5401 Canterbury Court", "Tucson", "Arizona", "85713", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("hsolo", "Han Solo", "hSolo@gmail.com", "4819 B Street", "Tucson", "Arizona", "85719", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("cbacca", "Chew Bacca", "cBacca@gmail.com", "6996 Chestnut Street", "Tucson", "Arizona", "85745", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("bfett", "Boba Fett", "bFett@gmail.com", "75 Fairview Avenue", "Tucson", "Arizona", "85746", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("jhutt", "Jabba The Hutt", "jHutt@aol.com", "32 3rd Street East", "Tucson", "Arizona", "85713", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("daddyproblems", "Kylo Ren", "kRen@gmail.com", "193 8th Street West", "Tucson", "Arizona", "85745", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("pdameron", "Poe Dameron", "pDameron@gmail.com", "138 Warren Avenue", "Tucson", "Arizona", "85746", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("cdooku", "Count Dooku", "cDooku@gmail.com", "416 Cardinal Drive", "Tucson", "Arizona", "85713", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");


INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("bbaggins", "Bilbo Baggins", "TheOneRing@gmail.com", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("fbaggins", "Frodo Baggins", "IHateRings@aol.com", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("sgamgee", "Samwise Gamgee", "SillyFrodo@gmail.com", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("gwormtongue", "Grima Wormtongue", "GandalfFanClub@gmail.com", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("theoneringllc", "The One Ring LLC", "contact@theoneringllc.com", "$2y$10$/5R9JbNqQHDfeC4/FgmQdupoi5djmNOHbPYxtoA8FJtnY1AbSimb2");


INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, picture, fk_lobbyist_username) VALUES ("Legalize Marijuana", "national", "2015-10-01 00:00:00.000", "2016-04-01 00:00:00.000", "1000000","http://media.graytvinc.com/images/Marijuana+Vote.png", "bbaggins");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, picture, fk_lobbyist_username) VALUES ("Fix The Pothole on Grant Road", "local", "2016-01-10 10:00:00.000", "2016-04-10 10:00:00.000", "1000","http://blogsdir.cms.rrcdn.com/91/files/2014/01/pothole.jpg", "sgamgee");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, picture, fk_lobbyist_username) VALUES ("Universal Background Checks for All Gun Purchases", "national", "2014-12-12 12:13:00.000", "2015-06-12 12:13:00.000", "500000","http://i.huffpost.com/gen/1132722/images/o-GUNS-IN-SCHOOLS-facebook.jpg", "theoneringllc");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, picture, fk_lobbyist_username) VALUES ("Term Limits for Members of Congress", "national", "2016-01-20 20:00:00.000", "2016-07-20 20:00:00.000", "200000","https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Seal_of_the_United_States_Congress.svg/2000px-Seal_of_the_United_States_Congress.svg.png", "gwormtongue");


INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("dvader", "1", "2899"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("daddyproblems", "3", "4999"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("hsolo", "4", "8284"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cbacca", "4", "2774"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("jhutt", "4", "9778"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cdooku", "4", "10000"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("pamidala", "4", "887"); 


INSERT INTO votes(fk_username, fk_issue_id) VALUES ("dvader", "1");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("dvader", "2");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("cbacca", "1");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("bfett", "3");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("daddyproblems", "4");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("pdameron", "1");
INSERT INTO votes(fk_username, fk_issue_id) VALUES ("cdooku", "2");