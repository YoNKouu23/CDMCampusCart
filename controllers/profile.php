<?php
session_start();  // Start the session

// Assuming that user data is stored in the session after login
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];  // Get the logged-in user data
} else {
    // Redirect to login page if no user is logged in
    header("Location: login.view.php");
    exit();
}

require("../views/profile.view.php");
?>
