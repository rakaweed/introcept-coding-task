# introcept-coding-task 
Laravel Create and Read Operations

### About the application
It is a web application that stores user information from an HTML table to a CSV file and also reads from that CSV file and displays it as a list.

### Technologies used
- Laravel (PHP framework)
- Bootstrap (CSS framework)

### How to use
- Clone the repository or download as a zip file and extract.
- Create a mysql database named ***laravel***
- Open command prompt (or a shell or terminal of choice) and navigate inside the project folder.
- Run the following command to create necessary tables on the database: ***php artisan migrate*** 
- Run the following command to serve the application: ***php artisan serve*** 
- Note the given url and navigate to it from the browser.

### Sitemap
**Suppose the given url is _http://127.0.0.1:8000_**  
- To see the list of users (from Database):  
	*http://127.0.0.1:8000/users*  
- To see the list of users (from CSV):  
	*http://127.0.0.1:8000/users/fromCSV*  
- To add users to the list (to CSV and Database):  
	*http://127.0.0.1:8000/users/create*  
- Location of the CSV file:  
	*http://127.0.0.1:8000/data/usersList.csv*  

### Things to do
- [x] Table for adding users.
- [x] Store users data from HTML table into CSV file.
- [x] Read from CSV file to display the users list.
- [x] Store users information to database table.
- [x] Read users information from database to display the users list.
- [ ] Update users information on database.
- [ ] Delete users information from database.
- [ ] Deploy for production.

### Notes
A library named "Laravel Collective" was used in order to generate HTML form fields easily.  
Installed with composer by running: ***composer require "laravelcollective/html":"^5.4.0"***
