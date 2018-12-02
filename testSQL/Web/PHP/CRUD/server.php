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
$userId = 0;
$photoId = -1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully (server.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Post");

echo "All posts are selected";

if(isset($_GET['del']))
{
    echo "delete requested";
    $photoId = $_GET['del'];
    echo "photoId is $photoId";
    mysqli_query($conn, "DELETE FROM Post WHERE photoId=$photoId");
    
    echo "redirecting...";
   header('location: ../../../index2.php');
    // Display notification
    $_SESSION['msg'] ="Post Deleted";
}

if(isset($_POST['update']))
{
    echo '<pre>';
print_r($_POST);
echo '</pre>';
    echo "update requested";
    $photoId = $_POST['photoId'];
    $location =  $_POST['location'];
    $photoPath = $_POST['photoPath'];
    if(isset($_POST['description']))
    {
        $title = $_POST['description'];
        if(!    $result =    mysqli_query($conn, "UPDATE Post SET location='$location', photoPath='$photoPath', title='$title' WHERE photoId='$photoId'")        )
        {
            echo "Query Error";
            die(mysqli_error($conn));
        }
        else {
            echo "<br>location='$location', photoPath='$photoPath', title='$title' WHERE photoId='$photoId'<br>";
            echo "Query DONE !";
            header('location: ../../../index2.php');
            $_SESSION["edit"] = "Post Edited";
        }

    }

}


// Check  click
if(isset($_POST['save']))
{
    $photoPath = $_POST['photoPath'];
    $title = $_POST['title'];
    $location = $_POST['location'];


    // Insert Post into the Database
    $query = "INSERT INTO Post (photoPath, title, uploadDate, location) VALUES ('$photoPath', '$title', '$uploadDate', '$location', '$photoId')";
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