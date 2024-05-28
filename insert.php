<?php
// Establish connection to MySQL database
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "ahmad"; // Change this to your database name
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to insert data into database table
$sql = "INSERT INTO auth (username, email, password) VALUES ('$username', '$email', '$password')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Your email have been created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>