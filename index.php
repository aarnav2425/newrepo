<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$projectDetails = $_POST['project_details'];// i want to initiate conflict

// Validate and sanitize the data (optional)

// Create a connection to the database
$servername = "localhost";
$username = "pwdgdptg_demo";
$password = "Aarnav12@";
$dbname = "pwdgdptg_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

CREATE TABLE data1(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    project_details TEXT
);


// Insert the form data into the database
$sql = "INSERT INTO data1 (name, email, subject, project_details) VALUES ('$name', '$email', '$subject', '$projectDetails')";

if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
