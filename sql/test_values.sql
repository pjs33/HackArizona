INSERT INTO users(username, realname, email, is_lobbyist, password) VALUES ("pswaguaros", "Pierre Swaguaros", "psaguaros@gmail.com", FALSE, "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, is_lobbyist, password) VALUES ("msempai", "Mikail Lolwelling Sempai", "br0ny4lyf3@aol.com",  TRUE, "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, is_lobbyist, password) VALUES ("Michelle Dirty Sanchez", "ms", "msanchez@gmail.com",  FALSE, "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, is_lobbyist, password) VALUES ("Danielle Shitzu", "ds", "dShitzu@gmail.com",  FALSE, "[Insert#HashEquivalent#]");
INSERT INTO users(username, realname, email, is_lobbyist, password) VALUES ("Ruby Girl", "rg", "girlpower@gmail.com",  TRUE, "[Insert#HashEquivalent#]");


INSERT INTO issues(name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Legalize Marijuana","1000000","2899","1","http://media.graytvinc.com/images/Marijuana+Vote.png", "ps");
INSERT INTO issues(name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Shut Down the National Security Agency","1","0","0","https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/National_Security_Agency.svg/2000px-National_Security_Agency.svg.png", "2");
INSERT INTO issues(name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Universal Background Checks for All Gun Purchases","500000","4999","1","http://i.huffpost.com/gen/1132722/images/o-GUNS-IN-SCHOOLS-facebook.jpg", "1");
INSERT INTO issues(name, goal_amount, current_amount, donors, picture, fk_lobbyist_username) VALUES ("Term Limits for Members of Congress","200000","139710","5","https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Seal_of_the_United_States_Congress.svg/2000px-Seal_of_the_United_States_Congress.svg.png", "3");


INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("1", "1", "2899"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("3", "3", "4999"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("2", "4", "8284"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("4", "4", "27774"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("5", "4", "2883"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("3", "4", "99882"); 
INSERT INTO donations(fk_username, fk_issue_id, money_amount) VALUES ("1", "4", "887"); 




