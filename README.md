# movies-database
MindGeek Technical Assessment

PHP version: 7.2.7  
Symfony version: 4.1.1  
Database: MySQL  
Server version: 10.1.34-MariaDB  
Apache/2.4.33  

Installation steps:
1. Download the project and place it in the local web server folder (for Apache with XAMPP, xampp/htdocs).
2. Edit the .env file in order to set the MySQL connection string.  
  DATABASE_URL=mysql://username:password@127.0.0.1:3306/database_name
3. Start the Apache and MySQL from XAMPP Control Panel.
4. Start the command line in the project folder and use 'php bin/console server:run' to start the PHP Web Server.
5. Navigate to the indicated URL, usually http://127.0.0.1:8000.

User guide:
1. Navigate to 'Fetch Database' page, where it will download the database.
2. If you want to reset all data in the database, navigate to 'Empty Database' and then again to 'Fetch Database'.
3. Use the search bar at the top or navigate the list of movies and enjoy!
