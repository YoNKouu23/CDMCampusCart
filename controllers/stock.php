<?php
session_start();
require '../configs/mongodb.php'; // Include your MongoDB connection class

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Handle form submission for adding a product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product data from the request
    $productName = $_POST['productName'] ?? '';
    $category = $_POST['category'] ?? '';
    $price = $_POST['price'] ?? '';
    $piece = $_POST['piece'] ?? '';

    // Handle the image upload
    if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['productImage']['tmp_name'];
        $imageName = $_FILES['productImage']['name'];
        $imagePath = '../uploads/' . basename($imageName); // Define the path to save the image

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($imageTmpPath, $imagePath)) {
            // Create an instance of MongoDBConnection
            $mongoDB = new MongoDBConnection();

            // Prepare the document to insert
            $document = [
                'name' => $productName,
                'category' => $category,
                'price' => (float)$price, // Ensure price is a float
                'stock' => (int)$piece, // Ensure stock is an integer
                'image' => $imagePath,
            ];

            // Insert the document into the 'products' collection
            $mongoDB->insertDocument('products', $document);

            echo json_encode(['success' => true, 'message' => 'Product added successfully.']);
            exit; // Stop further execution
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to upload image.']);
            exit; // Stop further execution
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Image upload error.']);
        exit; // Stop further execution
    }
}
?>