<?php
session_start();

// Destroy the session and log the user out
session_unset(); // Unsets all session variables
session_destroy(); // Destroys the session

// Redirect to login page after logging out
header("Location: ../views/login.view.php");
exit;
?>
