<?php

include "koneksi.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if username and password match
    $query = "SELECT * FROM `member` WHERE `username`='$username' AND `password`='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login successful
        session_start();
        $_SESSION['username'] = $username;
        // Redirect to a dashboard or welcome page
        header("Location: admin/panelmember.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}

// Close connection
$conn->close();
?>


