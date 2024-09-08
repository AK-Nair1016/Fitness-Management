<?php
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
    $FN = $_POST['fullName'];
    $mail = $_POST['email'];
    $passwd = $_POST['password'];

    // Prepare and execute SQL query
    $sql = "INSERT INTO users( fullName, email, password ) VALUES ('$FN', '$mail', '$passwd')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.html");  /* Redirect browser */
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>