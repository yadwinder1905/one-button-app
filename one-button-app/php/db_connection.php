<?php
// Database connection parameters
$host = 'localhost';
$username = 'root'; // Default username for XAMPP MySQL
$password = ''; // Default password for XAMPP MySQL
$database = 'test'; // Your database name

// Create connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
