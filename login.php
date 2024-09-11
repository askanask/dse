<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "user details";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Query the database
$sql = "SELECT * FROM customer_details WHERE uname='$username'and password='$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Authentication successful
        $_SESSION['uname'] = $row['uname']; // Store username in session
        header("Location: dashboard.php"); // Redirect to dashboard or any other page
        exit();
    } else {
        // Incorrect password
        echo "Invalid password";
    }
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
