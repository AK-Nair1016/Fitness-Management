<?php
session_start(); // Start session to store user data

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, redirect to gym dashboard
        $_SESSION['email'] = $email; // Store user email in session for future use
        header("Location: gym_dashboard.html");
        exit(); // Stop further execution
    } else {
        // User not found or invalid credentials, redirect back to login page with error message
        header("Location: login.html?error=1"); // Add error parameter to indicate failed login attempt
        echo "<tr><td colspan='10'>No gym members found</td></tr>";
        exit();
    }
}

$conn->close();
?>
