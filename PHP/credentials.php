<?php
// Define database credentials
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = 'learning';
$dbName = 'budget_tracker';

// Create a connection to the database
$connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Check for connection errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
