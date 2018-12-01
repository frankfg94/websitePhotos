<?php
//include("../PHP/Users/login.php");

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
echo "Connected successfully (createFeedback.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Feedback");

// Check button click
if(isset($_POST['saveContact']))
{
    $from = $_POST['from'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert Feedback into the Database
    $query = "INSERT INTO Feedback (mail,name,subject,message) VALUES ('$from', '$name', '$subject', '$message')";
    if(!    $result = mysqli_query($conn, $query))
    {
        echo "Query ERROR.<br>";
        die($conn->connect_error);  
    }
    else {
        echo "Feedback sent ! ";
        // Redirect to index page
        header('location: ../../HTML/Contact.php');
        
        // Display notification
        $_SESSION['msg'] ="Thanks for your Feedback";
    }

}
 
?>