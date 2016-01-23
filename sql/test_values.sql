INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("dvader", "Darth Vader", "dVader@gmail.com", "9497 Fawn Lane", "Tucson", "Arizona", "85719", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("dsidious", "Darth Sidious", "dSidious@aol.com", "273 Valley Road", "Tucson", "Arizona", "85721", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("pamidala", "Padme Amidala", "pAmidala@gmail.com", "5401 Canterbury Court", "Tucson", "Arizona", "85713", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("hsolo", "Han Solo", "hSolo@gmail.com", "4819 B Street", "Tucson", "Arizona", "85719", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("cbacca", "Chew Bacca", "cBacca@gmail.com", "6996 Chestnut Street", "Tucson", "Arizona", "85745", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("bfett", "Boba Fett", "bFett@gmail.com", "75 Fairview Avenue", "Tucson", "Arizona", "85746", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("jhutt", "Jabba The Hutt", "jHutt@aol.com", "32 3rd Street East", "Tucson", "Arizona", "85713", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("daddyproblems", "Kylo Ren", "kRen@gmail.com", "193 8th Street West", "Tucson", "Arizona", "85745", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("pdameron", "Poe Dameron", "pDameron@gmail.com", "138 Warren Avenue", "Tucson", "Arizona", "85746", "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, address, city, state, zipcode, password) VALUES ("cdooku", "Count Dooku", "cDooku@gmail.com", "416 Cardinal Drive", "Tucson", "Arizona", "85713", "[Insert#HashEquivalent#]");


INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("bbaggins", "Bilbo Baggins", "TheOneRing@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("fbaggins", "Frodo Baggins", "IHateRings@aol.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("sgamgee", "Samwise Gamgee", "SillyFrodo@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("gwormtongue", "Grima Wormtongue", "GandalfFanClub@gmail.com", "[Insert#HashEquivalent#]");
INSERT INTO lobbyists(lobbyist_username, realname, email, password) VALUES ("theoneringllc", "The One Ring LLC", "contact@theoneringllc.com", "[Insert#HashEquivalent#]");


INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, current_amount, num_donors, picture, fk_lobbyist_username, num_support, num_oppose) VALUES ("Legalize Marijuana", "national", "2015-10-01 00:00:00.000", "2016-04-01 00:00:00.000", "1000000","2899","1","http://media.graytvinc.com/images/Marijuana+Vote.png", "bbaggins", "83843", "76854");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, current_amount, num_donors, picture, fk_lobbyist_username, num_support, num_oppose) VALUES ("Fix The Pothole on Grant Road", "local", "2016-01-10 10:00:00.000", "2016-04-10 10:00:00.000", "1000","0","0","http://blogsdir.cms.rrcdn.com/91/files/2014/01/pothole.jpg", "sgamgee", "453", "2");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, current_amount, num_donors, picture, fk_lobbyist_username, num_support, num_oppose) VALUES ("Universal Background Checks for All Gun Purchases", "national", "2014-12-12 12:13:00.000", "2015-06-12 12:13:00.000", "500000","4999","1","http://i.huffpost.com/gen/1132722/images/o-GUNS-IN-SCHOOLS-facebook.jpg", "theoneringllc", "283283", "275855");
INSERT INTO issues(issue_name, issue_scope, issue_start_date, issue_end_date, goal_amount, current_amount, num_donors, picture, fk_lobbyist_username, num_support, num_oppose) VALUES ("Term Limits for Members of Congress", "national", "2016-01-20 20:00:00.000", "2016-07-20 20:00:00.000", "200000","31723","5","https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Seal_of_the_United_States_Congress.svg/2000px-Seal_of_the_United_States_Congress.svg.png", "gwormtongue", "994882", "990223");


INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("dvader", "1", "2899"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("daddyproblems", "3", "4999"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("hsolo", "4", "8284"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cbacca", "4", "2774"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("jhutt", "4", "9778"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("cdooku", "4", "10000"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("pamidala", "4", "887"); 


INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("dvader", "1", TRUE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("dvader", "2", FALSE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("cbacca", "1", TRUE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("bfett", "3", TRUE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("daddyproblems", "4", TRUE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("pdameron", "1", FALSE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("cdooku", "2", TRUE);
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("", "", "");
INSERT INTO votes(fk_username, fk_issue_id, support_issue) VALUES ("", "", "");