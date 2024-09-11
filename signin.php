Php 


<?php
session_start();

// Function to add user details to database
function addUser($username, $password) {
    // Connect to your database
    $conn = new mysqli("localhost", "username", "password", "database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert user details
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // User added successfully
        return true;
    } else {
        // Error adding user
        return false;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}

// Function to validate user credentials
function signIn($username, $password) {
    // Connect to your database
    $conn = new mysqli("localhost", "username", "password", "database");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to check user credentials
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, sign-in successful
        $_SESSION['username'] = $username;
        return true;
    } else {
        // User not found or incorrect credentials
        return false;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}

// Check if form is submitted for adding user details
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Call function to add user details
    if (addUser($username, $password)) {
        // User added successfully, redirect to next page
        header("Location: next_page.php");
        exit();
    } else {
        echo "Failed to add user. Please try again.";
    }
}

// Check if form is submitted for signing in
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Call function to validate user credentials
    if (signIn($username, $password)) {
        // Sign-in successful, redirect to next page
        header("Location: next_page.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>