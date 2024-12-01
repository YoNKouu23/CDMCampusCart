<?php

require("../configs/mongodb.php");

$db = new MongoDBConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;

    // Create a document to insert
    $document = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT), // Hash the password for security
        'age' => $age
    ];

    // Insert the document into the 'users' collection
    $db->insertDocument('users', $document);

    // Redirect to the login view with a success message
    header("Location: login.view.php?message=User  successfully added!");
    exit();
}

// Optionally fetch and display existing users
$users = $db->findDocuments('users');

require("../views/login.view.php"); 
?>