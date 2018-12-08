<?php
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

/**
 * $stmt = "SELECT * FROM User WHERE name=?";
 * $query = $conn->prepare($stmt);
 * $query->execute(array("Jérémi"));
 * $results = $query->fetchAll();
 * 
 * if (sizeof($results) >= 0)
 */

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully". "<br>";



?>