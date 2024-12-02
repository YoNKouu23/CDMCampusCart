<?php
// Start session for notifications
session_start();

// Include the MongoDB connection class
require_once '../configs/mongodb.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $formData = [
        'name' => $_POST['name'] ?? '',
        'username' => $_POST['username'] ?? '',
        'email' => $_POST['email'] ?? '',
        'password' => $_POST['password'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'birthdate' => $_POST['birthdate'] ?? '',
    ];

    // Server-side validation
    if (empty($formData['name'])||empty($formData['username']) || empty($formData['email']) || empty($formData['password']) || empty($formData['gender']) || empty($formData['birthdate'])) {
        $errors[] = "All fields are required.";
    } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($errors)) {
        // Hash the password for security
        $formData['password'] = password_hash($formData['password'], PASSWORD_BCRYPT);

        try {
            // Insert into MongoDB
            $mongo = new MongoDBConnection();
            $mongo->insertDocument('users', $formData);

            // On success, set success message and redirect
            $_SESSION['success'] = "Registration successful! Please log in.";
            header('Location: ../controllers/register.php');
            exit;
        } catch (Exception $e) {
            $errors[] = "Failed to register: " . $e->getMessage();
        }
    }

    // On failure, set errors and redirect back to the form
    $_SESSION['errors'] = $errors;
    $_SESSION['form_data'] = $formData;
    header('Location: ../views/register.view.php');
    exit;
}

// If not POST, show the form
require("../views/register.view.php");
?>
