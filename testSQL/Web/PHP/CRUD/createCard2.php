<?php include("../Users/login.php"); ?>
<?php


//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";
 
//Initialize variables for Database Post Table
$photoPath = "";
$uploadDate = date("y.d.m"); 
$title = "";
$location = "";
$userId = $_SESSION['userId'];    


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
    $photoPath = $_POST['photoPath'];
    $title = $_POST['description'];
    $location = $_POST['location'];
    if(isset($_POST['imgFilterName']))
    $filterName = $_POST['imgFilterName'];


    // Insert Post into the Database
    $query = "INSERT INTO Post (photoPath, title, uploadDate, location, userId, filterName) VALUES ('$photoPath', '$title', '$uploadDate', '$location',  '$userId', '$filterName')";
    if(!    $result = mysqli_query($conn, $query))
    {
        echo "Query ERROR .<br>";
        echo "'$photoPath', '$title', '$uploadDate', '$location',  '$userId'<br>";
        die(mysqli_error($conn));
    }
    else {

        echo "Post is now created ! ";
        // Redirect to index page
        header('location: ../../HTML/userPage.php');
        // Display notification
        $_SESSION['cardCreate'] ="Post created";
    }

}
 
?>