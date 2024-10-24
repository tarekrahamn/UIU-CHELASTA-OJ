<?php
$host = 'localhost';
$dbname = 'main_uiuoj';  // Replace with your database name
$username = 'root';  // Replace with your MySQL username
$password = '';  // Replace with your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
