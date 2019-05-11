# kajay

How to use the app locally for Mac

1) Download MAMP pro - you should be able to use the trial version for 2 weeks. KayJay was built using MAMP, and requires php, Apache and MYSQL

https://www.mamp.info/en/mamp-pro/

2) clone KayJay into a separate directory. I cloned the app into ~/code/kayjay

3) Once MAMP has been downloaded, configure your local kayjay host, by clicking on the plus sign at the bottom of the screen on the hosts setting:

![alt text](https://documentation.mamp.info/en/MAMP-PRO-Mac/First-Steps/FirstSteps.png)

Creating a new host for KayJay will allow you to set the document root to the cloned project and create a new database. 
I suggest creating a new db in this process.

4) Once you have created the database, you should be able to create the necessary tables. I created them via the command line
by entering a terminal window and typing /Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot

If you wish to do this via terminal, then once mysql has been brought up, type in

"use kayjay(or the name of your database)"

Then, create the following tables:

survey:
```+-----------+------------------+------+-----+---------+----------------+
| Field     | Type             | Null | Key | Default | Extra          |
+-----------+------------------+------+-----+---------+----------------+
| answer_id | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| answer    | varchar(255)     | NO   |     | NULL    |                |
+-----------+------------------+------+-----+---------+----------------+```

users:
```+----------+------------------+------+-----+---------+----------------+
| Field    | Type             | Null | Key | Default | Extra          |
+----------+------------------+------+-----+---------+----------------+
| user_id  | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| email    | varchar(50)      | NO   |     | NULL    |                |
| password | varchar(255)     | YES  |     | NULL    |                |
+----------+------------------+------+-----+---------+----------------+```

users_survey:
```+----------------+--------------+------+-----+---------+-------+
| Field          | Type         | Null | Key | Default | Extra |
+----------------+--------------+------+-----+---------+-------+
| user_id        | int(11)      | NO   | PRI | NULL    |       |
| answer_id      | varchar(255) | YES  |     | NULL    |       |
| date_submitted | timestamp    | NO   | PRI | NULL    |       |
+----------------+--------------+------+-----+---------+-------+```

Syntax for creating a survey table, for example, would be "CREATE TABLE survey (answer_id INT(10) unsigned NOT NULL,
answer VARCHAR(255))";

5) Once the databases are created, make sure apache and mysql are turned on in the MAMP GUI. You should then be able to go to
http://kayjay:8888/index/welcome.php to see the first page of the app.

MAMP documentation: https://documentation.mamp.info/en/MAMP-PRO-Mac/First-Steps/
