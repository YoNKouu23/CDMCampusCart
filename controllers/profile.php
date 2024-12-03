<?php
session_start();  // Start the session

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

require_once '../configs/mongodb.php';  // Assuming you have a MongoDB connection class

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $formData = [
        'username' => $_POST['username'] ?? '',
        'name' => $_POST['name'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'birthdate' => $_POST['birthdate'] ?? '',
    ];

    // Handle image upload
if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['profile_image']['tmp_name'];
    $fileName = $_FILES['profile_image']['name'];
    $fileSize = $_FILES['profile_image']['size'];
    $fileType = $_FILES['profile_image']['type'];
    
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    if (in_array($fileType, $allowedTypes)) {
        // Define where to save the file
        $uploadDir = '../uploads';
        $destPath = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            // If file uploaded successfully, save the path to the database
            $formData['profile_image'] = $destPath;  // Save the file path
        } else {
            $errors[] = "There was an error uploading the image.";
        }
    } else {
        $errors[] = "Invalid image type. Only JPEG, PNG, and GIF are allowed.";
    }
}



    if (empty($formData['username']) || empty($formData['name']) || empty($formData['gender']) || empty($formData['birthdate'])) {
        $errors[] = "All fields are required.";
    }

    if (empty($errors)) {
        try {
            $mongo = new MongoDBConnection();
    
            // Perform the update
            $formData['profile_image'] = isset($formData['profile_image']) ? $formData['profile_image'] : $_SESSION['user']['profile_image']; // Keep existing image if not updated
            $updated = $mongo->updateDocumentByEmail(
                'users',
                $_SESSION['user']['email'],
                $formData
            );
    
            if ($updated) {
                // Update the session with the new data
                $_SESSION['user'] = array_merge($_SESSION['user'], $formData);
                $_SESSION['success'] = "Profile updated successfully!";
            } else {
                $_SESSION['errors'][] = "No changes were made to the profile.";
            }
        } catch (Exception $e) {
            $_SESSION['errors'][] = "An error occurred: " . $e->getMessage();
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
    }

    header("Location: profile.php");
    exit();
}

require("../views/profile.view.php");  // Assuming this is where the profile view is
?>
