<?php
session_start();

// Include database connection parameters
include "dbcon.php";

// Check if form is submitted
if (isset($_POST['submit1'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to retrieve user from database
    $query = "SELECT * FROM auth WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Username exists, now check password
        $row = $result->fetch_assoc();
        
        // Retrieve the password stored in the database
        $stored_password = $row['password'];

        // Compare the password entered by the user with the stored password
        if ($password === $stored_password) {
            // Password is correct, redirect to bedroom.html
            $_SESSION['username'] = $row['username'];
            header("Location: bedroom.html");
            exit();
        } else {
            // Password is incorrect
            echo '<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Incorrect password</div>';
        }
    } else {
        // Username does not exist
        echo '<div class="alert alert-danger"><strong>Login Error!</strong>&nbsp;Username does not exist</div>';
    }
}
?>