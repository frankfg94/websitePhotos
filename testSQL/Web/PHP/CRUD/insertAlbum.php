<?php
//THIS FILE WILL ADD PHOTOS TO AN ALBUM FROM THE DATABASE

//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";

$albumId="";
// Check button click
if(isset($_POST['albumId']))
{
    //put the variables here
    $albumId = $_POST['albumId'];   
}
else 
{
    echo "albumId not set";
}

//Initialize variables for Database AlbumPost Table
$photoId = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully (insertAlbum.php)". "<br>";

$results = mysqli_query($conn, "SELECT * FROM albumpost");

//checks is the array of checkboxes is empty
if(empty($_POST['add']))
{
  echo("You didn't add any photo.");
}
else
{
    $numberOfPhotos = count($_POST['add']);
    echo("You selected $numberOfPhotos photos: ");
    for($i=0; $i < $numberOfPhotos; $i++)
    {
        //fill the array with the variables
        $photoId[$i] = $_POST['add'][$i];

        // Insert into the Database       
        $query = "INSERT INTO albumpost (photoId, albumId) VALUES ('$photoId[$i]', '$albumId')";
    
        if(!    $result = mysqli_query($conn, $query))
        {
            echo "Query ERROR .<br>";
            die($conn->connect_error);  
        }
        else
        {
            echo "Photos added to Album ! ";
        }
    }
    header( 'location: ../../HTML/userPage.php');
}

?>