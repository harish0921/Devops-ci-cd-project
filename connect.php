<?php
$servername = "localhost";
$username = "root";
$password = ""; // replace with your MySQL root password
$dbname = "two_tier_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
