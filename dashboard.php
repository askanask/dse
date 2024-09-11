<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['uname'])) {
    header("Location: index.php");
    exit();
}

// Display dashboard content
echo "Welcome, " . $_SESSION['username'] . "! You are now logged in.";
?>
