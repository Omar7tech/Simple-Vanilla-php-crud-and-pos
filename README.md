
# Victoria Perfumes - CRUD Application

The **Victoria Perfumes** application is a simple yet comprehensive CRUD (Create, Read, Update, Delete) system developed using **PHP** and **MySQL**. Designed for beginners, this project is a perfect introduction to PHP programming, database interactions, and web application development.

---

## Key Features

- **User-Friendly Interface**  
  Built with **Bootstrap** for a responsive and visually appealing design, ensuring compatibility across various devices.

- **Complete CRUD Operations**  
  Easily create, read, update, and delete records from the database.

- **Dynamic Price Management**  
  Add, edit, and delete perfume sizes and their respective prices.

- **Sales Management**  
  Record sales transactions, view statistics, and efficiently manage sales data.

- **Modal Forms**  
  Utilize **Bootstrap modals** for creating or editing entries without leaving the current page.

- **Error Handling**  
  Basic error-handling mechanisms ensure a smooth user experience and manage user inputs effectively.

---

## Technologies Used

- **PHP**: Server-side scripting for application logic.
- **MySQL**: Database management for storing and retrieving data.
- **HTML/CSS**: For markup and styling of the user interface.
- **Bootstrap**: Front-end framework for responsive web design.
- **JavaScript**: Enhances user interaction and manages AJAX requests.

---

## Installation Guide

Follow these steps to set up the Victoria Perfumes application locally:

### 1. Clone the Repository
```bash
git clone https://github.com/Omar7tech/victoria-perfumes.git
```

### 2. Set Up XAMPP
- Download and install [XAMPP](https://www.apachefriends.org/index.html).
- Start the **Apache** and **MySQL** services using the XAMPP Control Panel.

### 3. Create the Database
1. Open **phpMyAdmin** at `http://localhost/phpmyadmin`.
2. Create a new database named `victoria`.
3. Import the SQL file located in the `sql` directory of the cloned repository.

### 4. Configure Database Connection
1. Navigate to `inc/db.php` in the project directory.
2. Update the database connection details (e.g., host, username, password) if necessary.

### 5. Access the Application
1. Place the cloned repository in the `htdocs` directory of your XAMPP installation.
2. Open your web browser and navigate to:  
   ```http
   http://localhost/perfumes/index.php
   ```

---

## Application Structure

### Database Connection
- **`inc/db.php`**: Establishes a connection to the MySQL database.

### Landing Page
- **`index.php`**: Displays available perfume sizes and their prices.

### CRUD Operations
- **Create**:  
  Handled via `php/insert.php` and `php/insert_custom.php`.
- **Read**:  
  Retrieves data from the `sells` and `price` tables to display on the index and dashboard pages.
- **Update**:  
  Managed via `php/update_dash.php` and `php/edit_price.php`.
- **Delete**:  
  Executed with `php/delete_record.php` using AJAX for a seamless experience.

### Settings Page
- **`php/settings.php`**: Enables users to update perfume prices dynamically.

### Dashboard
- **`php/dashboard.php`**: Displays sales statistics and allows management of recorded sales.

### Navigation
- **`nav/index_nav.php`**  
- **`nav/settings_nav.php`**  
- **`nav/dash_nav.php`**  
  Provide intuitive navigation across the application.

---

## CRUD Operations Explained

### **Create**
Users can add new records for perfumes by filling out forms that capture the item name, price, and additional comments. These operations are implemented in `insert.php` and `insert_custom.php`.

### **Read**
The application retrieves data from the `sells` and `price` tables using SQL queries and displays the information on the relevant pages.

### **Update**
Users can update existing records via the edit modal. Pre-filled forms allow users to modify current data efficiently.

### **Delete**
Records can be deleted directly from the dashboard using AJAX calls, offering a smooth, no-page-reload experience.

---


## Conclusion

The **Victoria Perfumes** application is an excellent learning tool for beginners diving into PHP and web development. By exploring its codebase, users will gain insights into:

- Real-world application structure.
- Database management techniques.
- Implementation of CRUD operations.

Feel free to contribute, customize, or use this project as a foundation for your own applications. Happy coding!

---

## License

This project is open-source and licensed under the [MIT License](LICENSE).

---
