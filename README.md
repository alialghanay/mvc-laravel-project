# MVC Node.js Project

This project is a simple web application for managing and displaying student information (name, address, age). The application is built using the Model-View-Controller (MVC) pattern and utilizes various web application frameworks (WAFs).

## Table of Contents

-   [Technologies Used](#technologies-used)
-   [Project Structure](#project-structure)
-   [Getting Started](#getting-started)
    -   [Prerequisites](#prerequisites)
    -   [Installation](#installation)
    -   [Running the Project](#running-the-project)
-   [MVC Pattern Explanation](#mvc-pattern-explanation)
-   [Routes](#routes)

## Technologies Used

-   Laravel
-   Vite
-   SQLite
-   Axios

## Project Structure

```
root
├── app
|   ├──Http/Controllers
│   |   ├── Controller.php
│   |   └── delete-all-student.js
│   ├── Modles
|   |   └── Student.php
|   └── ...
├── resources
│   ├── js
|   |   ├── app.js
|   |   ├── bootstrap.js
|   |   └── deleteAll.js
|   ├── views
|   │   ├── layouts
|   │   |   └── app.blade.php
|   │   └── students
|   │       ├── create.blade.php
|   │       └── index.blade.php
|   └── ...
├── routes
│   ├── console.php
│   └── web.php
└── ...

```

## Getting Started

### Prerequisites

-   Composer (package manager)
-   Yarn (package manager)

### Installation

1. Clone the repository:

```bash
git clone https://github.com/alialghanay/mvc-laravel-project.git
cd mvc-laravel-project
```

### Install the dependencies:

```bash
yarn install
```

### Running the Project:

1. Start the server:

```bash
php artisan serve
yarn run dev
```

2. Open your browser and navigate to:

```URL
http://127.0.0.1:8000/
```

## MVC Pattern Explanation

### Model

The model manages the data and business logic. In this project, Student.php defines the schema for the student data and interacts with the SQLite database.

### View

The views handle the presentation logic. The project uses blade.php templates to render HTML. The views are located in the resources/views directory.

### Controller

The controllers manage the application logic and user input. They handle the flow of data between the model and the view. The controllers are located in the app/Http/Controllers directory.

### Routes

Dashboard: Displays a list of students.
`GET /`
Add Student: Provides a form to add a new student.
`GET /add-student`
`POST /api/add-student`
Delete All Students: Deletes all student records.
`POST /api/delete-all`
