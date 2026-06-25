# 🍕 Spice Bites Restaurant Website

A modern and responsive Restaurant Website developed using HTML, CSS, JavaScript, PHP, and MySQL. The project provides an interactive user experience with food menus, image galleries, authentication, and database integration.

## 🚀 Features

### Frontend Features

* Responsive Design for Desktop, Tablet, and Mobile
* Modern Hero Section with Video Background
* Sticky Navigation Bar
* Interactive Food Menu with Category Filters
* Food Gallery Section
* Smooth Animations and Hover Effects
* Contact Section
* Professional UI/UX Design

### Backend Features

* User Registration (Signup)
* User Login Authentication
* Password Hashing for Security
* Session Management
* User Dashboard
* Logout Functionality
* MySQL Database Integration

## 🛠 Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Development Environment

* XAMPP

---

## 📂 Project Structure

```text
restaurant/
│
├── index.php
├── style.css
├── script.js
├── db.php
├── signup.php
├── login.php
├── logout.php
├── dashboard.php
└── assets/
```

---

## ⚙️ Installation Guide

### Step 1: Install XAMPP

Download and install XAMPP.

### Step 2: Start Services

Open XAMPP Control Panel and start:

* Apache
* MySQL

### Step 3: Clone or Download Project

Place the project folder inside:

```text
C:\xampp\htdocs\
```

Example:

```text
C:\xampp\htdocs\restaurant
```

### Step 4: Create Database

Open:

```text
http://localhost/phpmyadmin
```

Create a database named:

```sql
restaurant_db
```

### Step 5: Create Users Table

Run the following SQL query:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);
```

### Step 6: Configure Database Connection

Open:

```php
db.php
```

Update credentials if necessary:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant_db";
```

### Step 7: Run the Project

Open your browser and visit:

```text
http://localhost/restaurant
```

---

## 🔐 Authentication System

### Signup

Users can create an account using:

* Username
* Email
* Password

### Login

Registered users can:

* Login securely
* Access Dashboard
* Maintain Session

### Logout

Users can safely end their session.

---

## 🎯 Learning Outcomes

This project helped in learning:

* Responsive Web Design
* Frontend Development
* JavaScript DOM Manipulation
* PHP Backend Development
* MySQL Database Management
* Authentication Systems
* Session Handling
* Full Stack Development Fundamentals

---

## 📸 Screenshots

Add project screenshots here after uploading them to GitHub.

---

## 👩‍💻 Developer

**Mobeen Fatimah**

Computer Science Student

Passionate about:

* Web Development
* UI/UX Design
* Artificial Intelligence
* Machine Learning
* Full Stack Development

---

## ⭐ Future Improvements

* Admin Panel
* Online Food Ordering
* Shopping Cart
* Table Reservation System
* Payment Gateway Integration
* Email Notifications
* User Profile Management

---

## 📄 License

This project is developed for educational and portfolio purposes.

