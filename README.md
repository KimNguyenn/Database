# Database
## This is a tutorial on how to view our database in MySQL Workbench and how to view our Website
## To take a look at our Retail Website we're going to use for our project, you would need to follow these steps:
1) Make sure to have XAMPP installed on your machine.
- Link to download the correct package for your computer: https://www.apachefriends.org/download.html
2) Make sure Apache and MySQL are running by clicking start on the XAMPP Control Panel.
3) Make sure you have MySQL Workbench and MySQL Server is on your machine.
-Link to download MySQL Workbench and Server: https://dev.mysql.com/downloads/workbench/
4) Download the ZIP file and then extract the files. There should be the following files and folders inside of the extracted folder:
-CreateDBRetail.sql
-InsertDB.sql
-ClearDBRetail.sql
-folder that includes files: admin.php, buy.php, datatable.php, db_connect.php, form.php, history.php, index.php, insert_customer.php, insert_item.php
5) Copy the homework folder into the :// xampp/htdocs (Where ever you saved XAMPP to and inside the xampp folder you will open up the folder labeled htdocs and copy the project folder inside.
6) Open MySQL Workbench and run the following commands in your local server:
-- CREATE DATABASE db1; //creates the hw6 database
-- USE db1; //Puts the hw6 database into use so that you can add and query into this database
7)  Still in MySQL WB, open CreateDBRetail.sql file and click run. It will create the tables.
8) Still in MySQL WB, open InsertDB.sql file and click run. It will insert data into the tables. (You can do the followiing commands to see all the tables in your database and individual tables:  -- SHOW TABLES; //shows all the tables in your database - Should show customer, item, and company  -- SELECT * FROM select_table // Replace select_table with either customer, item, or company )
10) Now that your database is now set up, go to your chosen internet browser you prefer (Chrome, Firefox, etc)
11) In the searchbar type in localhost/project and press enter. A webpage with a text fields should pop up.
12) Interact with the website and enjoy!

_Helpful tip: If your MySQL Workbench has a unique password set up, you must enter in your password into the config.inc file that is found in the ://xampp/phpMyAdmin folder. Also will need to add your password into the db_connect.php file that was copied into the ://xampp/htdocs/project folder. _
