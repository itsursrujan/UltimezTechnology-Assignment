CREATE DATABASE customer_db;
USE customer_db;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    city VARCHAR(50)
);

INSERT INTO customers (name, email, phone, city) VALUES
('John Doe', 'john@gmail.com', '9876543210', 'Bangalore'),
('Jane Smith', 'jane@gmail.com', '9123456780', 'Hyderabad'),
('Rahul Kumar', 'rahul@gmail.com', '9988776655', 'Delhi'),
('Anita Rao', 'anita@gmail.com', '8899776655', 'Mumbai'),
('Suresh', 'suresh@gmail.com', '7766554433', 'Chennai');