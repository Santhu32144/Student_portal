CREATE DATABASE myDatabase;

USE myDatabase;

CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(40) NOT NULL,
    lastName VARCHAR(40) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    contactNumber VARCHAR(15) NOT NULL,
    email VARCHAR(60) NOT NULL,
    street VARCHAR(40) NOT NULL,
    city VARCHAR(40) NOT NULL,
    state VARCHAR(40) NOT NULL,
    country VARCHAR(40) NOT NULL,
    department VARCHAR(40) NOT NULL,
    dateOfAdmission DATE NOT NULL,
    dateOfLeaving DATE,
    courseCompletionYear INT NOT NULL,
    feePaid INT NOT NULL
);