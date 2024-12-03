<?php
session_start();
require_once '../configs/mongodb.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the purchase data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate the data
    if (isset($data['productName'], $data['productPrice'], $data['userEmail'])) {
        // Initialize MongoDB connection
        $mongo = new MongoDBConnection();

        // Prepare the purchase document
        $purchaseDocument = [
            'productName' => $data['productName'],
            'productPrice' => (float)$data['productPrice'],
            'userEmail' => $data['userEmail'],
            'purchaseDate' => new MongoDB\BSON\UTCDateTime(), // Current date and time
            // Add any other relevant fields here
        ];

        // Insert the purchase document into the 'purchases' collection
        $mongo->insertDocument('purchases', $purchaseDocument);

        // Respond with success
        echo json_encode(['success' => true]);
    } else {
        // Respond with an error
        echo json_encode(['success' => false, 'message' => 'Invalid purchase data.']);
    }
} else {
    // Respond with an error for invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>