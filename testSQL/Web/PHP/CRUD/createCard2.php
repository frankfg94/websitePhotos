<?php


//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";
 
//Initialize variables for Database Post Table
$photoPath = "";
$uploadDate = date("m.d.y"); 
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
echo "Connected successfully (createCard2.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Post");

// Check button click
if(isset($_POST['save']))
{
    $photoPath = "https://www.thesignmaker.co.nz/wp-content/uploads/2018/03/CA4_Work-In-Progress-symbol.jpg";
    $title = $_POST['description'];
    $location = $_POST['location'];


    // Insert Post into the Database
    $query = "INSERT INTO Post VALUES ('$photoPath', '$title', '$uploadDate', '$location', '$photoId', '$userId')";
    if(!    $result = mysqli_query($conn, $query))
    {
        echo "Query ERROR .<br>";
        die($conn->connect_error);  
    }
    else {

        echo "Post is now created ! ";
        
        // Redirect to index page
        header('location: ../../HTML/userPage.php');
        // Display notification
        $_SESSION['msg'] ="Post created";
        
    }

}
 
?>