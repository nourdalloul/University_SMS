# University Student Management System (SMS)

## 📌 Project Description

This project is a simple **University Student Management System** developed as part of the *Docker & GitHub Basics* course assignment.

The system allows managing university students through basic CRUD operations:

* View students
* Add new student
* Edit student information
* Delete student

The project is built using **PHP, MySQL, HTML, CSS**, and fully containerized using **Docker & Docker Compose**.

---

## 🛠 Technologies Used

* PHP 8.1
* MySQL 8.0
* HTML5
* CSS3
* Docker
* Docker Compose
* Git & GitHub

---

## 🐳 Docker Setup

The project uses **Docker Compose** to run:

* `web` service: Apache + PHP
* `db` service: MySQL database

### Run the project:

```bash
docker compose up
```

### Stop the project:

```bash
docker compose down
```

---

## 🗄 Database

* Database Name: `studentssystem`
* Table: `students`

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    major VARCHAR(100) NOT NULL
);
```

---

## 🌐 Access the Application

After running Docker:

```
http://localhost:8080/viewStudents.php
```

---

## 📂 Project Structure

```
University_SMS/
│── src/
   │── DBConnection.php
   │── viewStudents.php
   │── addStudent.php
   │── editStudent.php
   │── deleteStudent.php
   │── style.css
│── Dockerfile
|── docker-compose.yml
|──.dockerignore
|── README.md
|──.gitignore
│── docs/
   │── notes.md
   │── screenshots/
```

---

## ✅ Assignment Requirements Covered

* Docker & Docker Compose
* MySQL Database inside Docker
* PHP CRUD Application
* Git Version Control
* GitHub Repository
* Screenshots for all required steps

---

## 👩‍💻 Author

**Nour Dalloul**
