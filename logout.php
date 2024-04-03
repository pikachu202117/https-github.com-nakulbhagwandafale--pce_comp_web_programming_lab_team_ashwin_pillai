<?php
header('Content-Type: application/javascript');

// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['logged_user'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();
    echo "alert('You have successfully logged out.');";
    // Redirect to the login page or any other appropriate page
    header("Location: pages/media.html");
    exit;
} else {
    // If the user is not logged in, redirect to the login page
    echo "alert('Please login');";
    header("Location: pages/media.html");
    exit;
}
?>
