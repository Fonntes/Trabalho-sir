CREATE TABLE IF NOT EXISTS Users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS States (
    id_state INT AUTO_INCREMENT PRIMARY KEY,
    state VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Priority(
    id_priority INT AUTO_INCREMENT PRIMARY KEY,
    priority VARCHAR(50) NOT NULL
);


CREATE TABLE IF NOT EXISTS Tasks (
    id_task INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    favorite BOOLEAN,
    creation_date DATE,
    initial_date DATE,
    finish_date DATE,
    id_user_post INT,
    id_state INT,
    id_priority INT,
    FOREIGN KEY (id_user_post) REFERENCES Users(id_user),
    FOREIGN KEY (id_state) REFERENCES States(id_state),
    FOREIGN KEY (id_priority) REFERENCES Priority(id_priority)
);


CREATE TABLE IF NOT EXISTS Shared_Tasks (
    id_share INT AUTO_INCREMENT PRIMARY KEY,
    id_task INT,
    id_shared_user INT,
    message TEXT,
    FOREIGN KEY (id_task) REFERENCES Tasks(id_task),
    FOREIGN KEY (id_shared_user) REFERENCES Users(id_user)
);

CREATE TABLE IF NOT EXISTS Categories (
    id_category INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Categories_Tasks (
    id_category INT,
    id_task INT,
    PRIMARY KEY (id_category, id_task),
    FOREIGN KEY (id_category) REFERENCES Categories(id_category),
    FOREIGN KEY (id_task) REFERENCES Tasks(id_task)
);


CREATE TABLE IF NOT EXISTS Documents (
    id_document INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(255) NOT NULL,
    file BLOB NOT NULL
);

CREATE TABLE IF NOT EXISTS Tasks_Documents (
    id_task INT,
    id_document INT,
    PRIMARY KEY (id_task, id_document),
    FOREIGN KEY (id_task) REFERENCES Tasks(id_task),
    FOREIGN KEY (id_document) REFERENCES Documents(id_document)
);
