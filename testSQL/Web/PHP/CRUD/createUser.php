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
//echo "Connected successfully to database (createUser.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM User");

// Check button click
if(isset($_POST['save']))
{
    echo "Save Button Clicked". "<br>";
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $status = "User";
    
    echo "Variables initialized". "<br>";

    // Insert Post into the Database
    $query = "INSERT INTO User (mail,password,name,status) VALUES ('$mail', '$password', '$name', '$status')";
    if(!$result = mysqli_query($conn, $query))
    {
        echo "Query Error". "<br>";
    }
    else {
        echo "Query Done". "<br>";
        // Redirect to index page
        echo "Displaying notification";
        header('location: ../../HTML/connection.php');
        try
        {
            session_abort();
            session_destroy();
        }
        finally
        {
            session_start();    
        }
        // Display notification
        $_SESSION['subscribed'] ="Account created successfully";
        
    }

}
 
?>