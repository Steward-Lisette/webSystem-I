# webSystem-I
The above code contains traces of php and some js lines of codes
which some functions are currently disabled due to hosting on 
Git-Hub
Database Xamp
use....
CREATE DATABASE WebsiteSystem;

USE WebsiteSystem;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Thank you
