<?php
// Database connection variables
$host = "localhost";
$username = "root";
$password = ""; // Replace with your MySQL password
$dbname = "kca";

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
