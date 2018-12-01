<?php


//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";
 
//Initialize variables for Database Post Table
$photoPath = "";
$uploadDate = date("d.m.y"); 
$title = "";
$location = "";
$photoId = 10;
$userId = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Post");


if(isset($_GET['del']))
{
    $photoId = $_GET['del'];
    mysqli_query($conn, "DELETE FROM Post WHERE photoId=$photoId");
    header('location: index.php');
    // Display notification
    $_SESSION['msg'] ="Post Deleted";
}


// Check button click
if(isset($_POST['save']))
{
    $photoPath = $_POST['photoPath'];
    $title = $_POST['title'];
    $location = $_POST['location'];


    // Insert Post into the Database
    $query = "INSERT INTO Post VALUES ('$photoPath', '$title', '$uploadDate', '$location', '$photoId', '$userId')";
    if(!    $result = mysqli_query($conn, $query))
    {
        die($conn->connect_error);  
    }
    else {
        // Retrieve database results

        // Redirect to index page
        header('location: index.php');
        // Display notification
        $_SESSION['msg'] ="Post created";
        
    }

}
 
?>