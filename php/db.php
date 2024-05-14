<?php

// USE school;

// CREATE TABLE student (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     age INT NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );


// Database connection settings
$servername = "localhost";
$username = "root";  // Update with your MySQL username
$password = "";      // Update with your MySQL password
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = isset($_POST["name"]) ? $_POST["name"] : '';
$age = isset($_POST["age"]) ? intval($_POST["age"]) : 0;
$email = isset($_POST["email"]) ? $_POST["email"] : '';

// Validate input
if ($name && $age && $email) {
    // Prepare and bind SQL query
    $stmt = $conn->prepare("INSERT INTO student (name, age, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $age, $email);

    // Execute query
    if ($stmt->execute()) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Please provide valid student details!";
}

// Close connection
$conn->close();
?>
