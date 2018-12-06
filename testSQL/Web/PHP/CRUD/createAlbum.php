<?php
//THIS FILE WILL ADD AN NEW ALBUM TO THE DATABASE

//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";
 
//Initialize variables for Database Album Table

$albumTitle = "";
$description = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully (createAlbum.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Album");

// Check button click
if(isset($_POST['saveAlbum']))
{
    //put the variables here 
    $albumTitle = $_POST['albumTitle'];
    $description = $_POST['description'];

    // Insert Post into the Database
    $query = "INSERT INTO Album (title, description) VALUES ('$albumTitle', '$description')";
    
    if(!    $result = mysqli_query($conn, $query))
    {
        echo "Query ERROR .<br>";
        die($conn->connect_error);  
    }
    else {

        echo "Album is now created ! ";
        header( 'location: ../../HTML/userPage.php');
    }
}

?>