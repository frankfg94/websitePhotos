<?php
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "Nj39_HuAa-5f";
$dbname = "photosprojet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$query = "SELECT * from Post";
$result = $conn->query($query);

if($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc()) {
    echo $row["photoPath"] . "<br>";
    echo $row["title"]. "<br>";
    echo $row["place"]. "<br>";
    echo $row["photoId"]. "<br>";
	echo ' <br> ';
	}
}

$conn->close();

?>