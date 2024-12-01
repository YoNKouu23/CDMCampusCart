<?php

class MongoDBConnection {
    private $manager;
    private $dbName;
    private $logFile;

    public function __construct($uri = "mongodb://localhost:27017/", $dbName = "cdmcart", $logFile = 'mongodb.log') {
        $this->dbName = $dbName;
        $this->logFile = $logFile;
        try {
            $this->manager = new MongoDB\Driver\Manager($uri);
            $this->log("MongoDB is connected");
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Error: " . $e->getMessage());
        }
    }

    private function log($message) {
        // Write the log message to the log file
        file_put_contents($this->logFile, date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
    }

    public function getManager() {
        return $this->manager;
    }

    public function insertDocument($collection, $document) {
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert($document);
        try {
            $result = $this->manager->executeBulkWrite("{$this->dbName}.$collection", $bulk);
            $this->log(sprintf("Inserted %d document(s).", $result->getInsertedCount()));
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Insert Error: " . $e->getMessage());
        }
    }

    public function updateDocumentById($collection, $id, $newData) {
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->update(
            ['_id' => new MongoDB\BSON\ObjectId($id)], // Filter
            ['$set' => $newData] // Update operation
        );
        try {
            $result = $this->manager->executeBulkWrite("{$this->dbName}.$collection", $bulk);
            $this->log(sprintf("Updated %d document(s).", $result->getModifiedCount()));
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Update Error: " . $e->getMessage());
        }
    }

    public function findDocuments($collection) {
        $query = new MongoDB\Driver\Query([]);
        try {
            $cursor = $this->manager->executeQuery("{$this->dbName}.$collection", $query);
            foreach ($cursor as $document) {
                // Optionally log the document or handle it as needed
                $this->log("Found document: " . json_encode($document));
            }
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Query Error: " . $e->getMessage());
        }
    }

    public function findDocumentById($collection, $id) {
        $query = new MongoDB\Driver\Query(['_id' => new MongoDB\BSON\ObjectId($id)]);
        try {
            $cursor = $this->manager->executeQuery("{$this->dbName}.$collection", $query);
            foreach ($cursor as $document) {
                $this->log("Found document by ID: " . json_encode($document));
            }
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Query Error: " . $e->getMessage());
        }
    }

    public function deleteDocumentById($collection, $id) {
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->delete(['_id' => new MongoDB\BSON\ObjectId($id)]);
        try {
            $result = $this->manager->executeBulkWrite("{$this->dbName}.$collection", $bulk);
            $this->log(sprintf("Deleted %d document(s).", $result->getDeletedCount()));
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Delete Error: " . $e->getMessage());
        }
    }

    public function deleteDocument($collection, $criteria) {
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->delete($criteria);
        try {
            $result = $this->manager->executeBulkWrite("{$this->dbName}.$collection", $bulk);
            $this ->log(sprintf("Deleted %d document(s).", $result->getDeletedCount()));
        } catch (MongoDB\Driver\Exception\Exception $e) {
            $this->log("Delete Error: " . $e->getMessage());
        }
    }
}