<?php
// Database credentials
$servername = "localhost"; // or your server IP address
$username = "root";
$password = "";
$dbname = "SimpleDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Close the connection
// $conn->close();
?>
