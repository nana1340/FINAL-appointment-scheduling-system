# YIC Appointment Scheduling System

## Project Overview

The YIC Appointment Scheduling System is a web application for Yanbu Industrial College. The system allows students to book appointments with staff members through an online portal.

Students can register, log in, browse available time slots, book appointments, view appointment status, cancel appointments, receive notifications, and update their profile.

Admin users can manage available time slots, review student appointment requests, confirm or cancel appointments, receive notifications, view system activity, and update their profile.

## Technologies Used

- HTML5
- CSS
- JavaScript
- PHP
- MySQL
- PDO

## User Roles

The system has two main user roles: student and admin.

Students can:

- Register using a YIC student email
- Log in and log out
- View the student dashboard
- Browse available appointment slots
- Book an appointment
- View upcoming, pending, past, and cancelled appointments
- Cancel appointments
- Receive notifications
- Update profile information

Admins can:

- Log in and log out
- View the admin dashboard
- Add available time slots
- Delete available time slots
- Review student appointment requests
- Confirm appointments
- Cancel appointments
- Receive notifications
- Update admin profile information

## Main Features

- User registration
- User authentication using sessions
- Role-based access for students and admins
- Appointment booking
- Appointment status management
- Time slot management
- Notifications
- Profile management
- Responsive user interface
- Database integration using MySQL and PDO

## Security Features

- Password hashing using `password_hash()`
- Password checking using `password_verify()`
- PDO prepared statements to help prevent SQL injection
- Input validation before saving user data
- `htmlspecialchars()` used when displaying user data to help prevent XSS
- CSRF tokens used for important forms and actions
- Separate access checks for student and admin pages

## Setup Instructions

1. Start Laragon.
2. Copy the project folder into:

```text
C:\laragon\www
```

3. Open phpMyAdmin.
4. Import the database file:

```text
database/database.sql
```

5. Open the project in the browser:

```text
http://localhost/project381/login.php
```

## Database

Database name:

```text
appointment_system
```

Main tables:

- `users`
- `time_slots`
- `appointments`
- `notifications`

## Login Credentials

Admin account:

```text
Email: admin@yic.edu.sa
Password: Password123
```

Student account:

```text
Email: student@stu.yic.edu.sa
Password: Password123
```

New users can also register from the registration page.

## File Structure

```text
project381/
│
├── admin/
│   ├── admin-dashboard.php
│   ├── admin-profile.php
│   ├── manage-appointments.php
│   └── manage-slots.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── JS/
│       └── script.js
│
├── database/
│   └── database.sql
│
├── includes/
│   ├── admin-auth.php
│   ├── db.php
│   ├── notifications.php
│   ├── security.php
│   └── student-auth.php
│
├── student/
│   ├── book-appointment.php
│   ├── dashboard.php
│   ├── my-appointments.php
│   └── profile.php
│
├── login.php
├── logout.php
└── register.php
```

## Video Walkthrough Guide

In the video walkthrough, demonstrate:

1. Opening the login page
2. Registering or logging in as a student
3. Viewing the student dashboard
4. Booking an appointment
5. Viewing appointments by status
6. Updating the student profile
7. Logging in as admin
8. Adding a time slot
9. Confirming or cancelling an appointment
10. Viewing notifications
11. Mentioning security features such as validation, sessions, prepared statements, XSS prevention, CSRF tokens, and password hashing

## Project Authors

Student 1: Layan Dhaifallah Aljohani  
ID: 441500318

Student 2: Layan Abdullah Aljuhani        
ID: 441500247
