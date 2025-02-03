<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Get user details from session
$email = $_SESSION['email'];
$username = $_SESSION['name'];
$usertype = $_SESSION['usertype'];

// Restrict page access based on user type
$current_page = basename($_SERVER['PHP_SELF']); // Get current page filename

// Check if the current page requires specific user access
if ($current_page === 'admin.php' && $usertype !== 'admin') {
    // If the current page is admin_page.php, only allow admin users
    header("Location: 403.php"); // Redirect to a "Forbidden" page
    exit();
}

if ($current_page === 'user_page.php' && $usertype !== 'user') {
    // If the current page is user_page.php, only allow regular users
    header("Location: 403.php"); // Redirect to a "Forbidden" page
    exit();
}

// Include the welcome page (this will be accessed after user type validation)
include('header.php');
?>

