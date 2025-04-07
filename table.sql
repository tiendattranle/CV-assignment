CREATE DATABASE cv_builder;
USE cv_builder;

-- User Table
CREATE TABLE User (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
);

-- CV Table
CREATE TABLE Cv (
    cv_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(user_id) ON DELETE CASCADE
);

-- Contact Table
CREATE TABLE Contact (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    phone_num VARCHAR(20),
    email VARCHAR(255),
    FOREIGN KEY (cv_id) REFERENCES Cv(cv_id) ON DELETE CASCADE
);

-- Education Table
CREATE TABLE Education (
    edu_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    info TEXT NOT NULL,
    FOREIGN KEY (cv_id) REFERENCES Cv(cv_id) ON DELETE CASCADE
);

-- Experience Table
CREATE TABLE Exp (
    exp_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    info TEXT NOT NULL,
    FOREIGN KEY (cv_id) REFERENCES Cv(cv_id) ON DELETE CASCADE
);

-- Skills Table
CREATE TABLE Skill (
    skill_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    info TEXT NOT NULL,
    FOREIGN KEY (cv_id) REFERENCES Cv(cv_id) ON DELETE CASCADE
);
