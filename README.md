# Database
## This is a tutorial on how to view our database design in mySQL. This is also a mini tutorial on some basic SQL commands.
## To take a look at our database we're going to use for our project, you would need to follow these steps:
_Make sure you have MySQL Workbench Installed. This is a link that you can use to download: https://dev.mysql.com/downloads/workbench/_
1) Download all of the files for this projects.
2) Open up your local server.
3) Open a the CreateDBRetail.sql file _or_ Copy & Paste the contents of the CreateDBRetail.sql into a new SQL File.
4) At the top of the file, enter the following lines of code: 
- CREATE DATABASE RetailTest; \\where RetailTest is the name of the database (can be any name)
- USE RetailTest; \\ This line applies the new database you just created
- The rest of the file should be what was in CreateDBRetail.sql
5) Press the Execute button to create the Database and the tables of our project. 
- The excute button looks like a lightning bolt _or_ you can click Query in the toolbar on the top and click Execute all
6) If you want to see what tables are in the database you just created:
- Make sure that the file no longer has any CREATE commands. You can comment out each line or just delete from the file.
- Once your file is ready, enter the following code:
- SHOW TABLES; \\Should display the tables that are in the database.
7) You can also look at the individual tables by entering (executing only one at a time) :
_(Since there isn't any data inserted into the tables, only the fields of each table will display as null. )_
- SELECT * FROM CUSTOMER;
- SELECT * FROM ITEM;
- SELECT * FROM COMPANY;
