<?php

$host = 'localhost';
$user = 'root';
$password = ''; // Add your database password if necessary
$database = 'skinlens_db';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Connection successful
// Uncomment the line below to indicate successful connection
// echo 'Connected successfully';

?>