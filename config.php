<?php
$host = "localhost";  // XAMPP default
$user = "root";       // Default user in XAMPP (no password by default)
$password = "";       // No password in default XAMPP setup
$database = "cv"; // Your database name
$db_port = 3307;

// Create connection
$conn = new mysqli($host, $user, $password, $database, $db_port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
