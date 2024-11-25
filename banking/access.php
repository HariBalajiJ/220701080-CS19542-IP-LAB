<?php
$host = 'localhost';
$dbname = 'bank';
$username = 'root';  // default username for XAMPP
$password = '';      // leave blank for XAMPP

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
