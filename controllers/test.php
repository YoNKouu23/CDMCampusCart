<?php
require_once '../configs/mongodb.php';

$mongo = new MongoDBConnection();
$email = 'user@example.com'; // Replace with the email you want to test

// Check if the connection is working by fetching a document
$user = $mongo->findDocumentByEmail('users', $email);
if ($user) {
    echo "User  found: " . json_encode($user) . "<br>";
} else {
    echo "User  not found or error occurred.<br>";
}

// Prepare new data for update
$newData = [
    'username' => 'new_username',
    'name' => 'New Name',
    'gender' => 'male',
    'birthdate' => '2000-01-01'
];

// Attempt to update the document
$result = $mongo->updateDocumentByEmail('users', $email, $newData);
if ($result) {
    echo "Update successful! Modified count: " . $result->getModifiedCount();
} else {
    echo "Update failed. Check the log for details.";
}
?>