<?php
session_start();

require_once '../configs/mongodb.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Initialize MongoDB connection
    $mongo = new MongoDBConnection();

    // Query the database for the user
    $user = $mongo->findDocumentByEmail('users', $email);  // Using the correct collection and email

    if ($user) {
        // User found, verify password
        if (password_verify($password, $user->password)) {
            // Successful login
            $_SESSION['login_success'] = true;
            
            // Store relevant user information in session
            $_SESSION['user'] = [
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
                'name' => $user->name,
                'gender' => $user->gender,
                'birthdate' => $user->birthdate,
                // Add any other data you'd like to store
            ];

            // Redirect to home page or dashboard after successful login
            header("Location: ../index.php");
            exit;
        } else {
            // Invalid password
            $_SESSION['login_failed'] = 'Invalid email or password.';
            header("Location: ../views/login.view.php");
            exit;
        }
    } else {
        // User not found
        $_SESSION['login_failed'] = 'No user found with that email.';
        header("Location: ../views/login.view.php");
        exit;
    }
} else {
    // Show login form
    require("../views/login.view.php");
}
?>
