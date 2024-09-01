# Home Management System

## Project Overview

This project is a comprehensive Home Management System designed to streamline various aspects of managing a household. It provides a user-friendly interface for organizing tasks, tracking expenses, managing bills, storing documents, and more.

## Features

- **User Management:** Create and manage user accounts with customizable profiles.
- **Dashboard:** A central hub for accessing different features of the system.
- **Bill Management:** Track, pay, and manage various bills like electricity, gas, water, mobile recharge, telephone, and television.
- **Expense Tracking:** Record and analyze household expenses.
- **Document Management:** Store and organize important documents digitally, including individual documents, home documents, and shop documents.
- **Insurance Management:** Track and manage life and term insurance policies.
- **Savings Management:** Track and manage savings goals.
- **Task Reminder:** Set reminders and assign tasks to users within the household.
- **Profile Management:** Edit personal profile information, social media links, and change passwords.

## Installation

**Prerequisites:**

- PHP server
- MySQL database

**Installation Steps:**

1. **Create a database:** Create a new MySQL database for the system.
2. **Import the database schema:** Import the `iwt_project.sql` file from the `Database Table` directory into your database.
3. **Configure database connection:**
   - Open the `db_connect.php` file.
   - Replace the placeholder database credentials with your actual database information.
4. **Set up the server:** Configure your web server (e.g., Apache, Nginx) to point to the `Home-Management-System` directory.

## Usage

To access the Home Management System, simply navigate to the root URL of your web server.

**Login:**

- Use the `login.php` page to log in with existing credentials.

**Sign Up:**

- Use the `sign-up.php` page to create a new account.

**Features:**

- **Dashboard:** Access the dashboard by logging in successfully.
- **Bill Management:** Use the `bill-management` directory to manage bills.
- **Expense Tracking:** Use the `expenditure` directory to track expenses.
- **Document Management:** Use the `dg-locker` directory to manage documents.
- **Insurance Management:** Use the `insurance` directory to manage insurance policies.
- **Savings Management:** Use the `saving` directory to manage savings goals.
- **Task Reminder:** Use the `task-remainder` directory to manage tasks.
- **Profile Management:** Use the `profile` directory to manage your profile.

## License

This project is licensed under the GNU GENERAL PUBLIC LICENSE.

Please refer to the LICENSE file for more information.
