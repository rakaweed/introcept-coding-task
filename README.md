# introcept-coding-task 
Laravel Create and Read Operations

### About the application
It is a web application that stores user information from an HTML table to a CSV file and also reads from that CSV file and displays it as a list.

### Technologies used
- Laravel (PHP framework)
- Bootstrap (CSS framework)

### How to use
- Clone the repository or download as a zip file and extract.
- Open command prompt (or a shell or terminal of choice) and navigate inside the project folder.
- Run the following command: ***php artisan serve*** 
- Note the given url and navigate to it from the browser.

### Sitemap
**Suppose the given url is _http://127.0.0.1:8000_**  
- To see the list of users:  
	*http://127.0.0.1:8000/usersFromCSV*  
- To add users to the list:  
	*http://127.0.0.1:8000/users/create*  
- Location of the CSV file:  
	*http://127.0.0.1:8000/data/usersList.csv*  

### Things to do
- [x] Table for adding users.
- [x] Store users data from HTML table into CSV file.
- [x] Read from CSV file to display the users list.
- [ ] Store users information to database.
- [ ] Read users information from database.
- [ ] Update users information on database.
- [ ] Delete users information from database.
- [ ] Deploy for production.

### Notes
A library named "Laravel Collective" was used in order to generate HTML form fields easily.  
Installed with composer by running: ***composer require "laravelcollective/html":"^5.4.0"***