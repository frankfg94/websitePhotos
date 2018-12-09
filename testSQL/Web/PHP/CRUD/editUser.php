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
echo "Connected successfully (editUser.php)". "<br>";
 
$results = mysqli_query($conn, "SELECT * FROM Album");

// Check button click
if(isset($_POST['userEdited']))
{
    //put the variables here 
    $name = $_POST['usernameEditPhotos'];
    $profileImageBg = $_POST['profileImageBg'];
    $profileImage = $_POST['profileImage'];

    // Insert Post into the Database
    $query = "UPDATE User SET profileImage='$profileImage' , profileImageBg='$profileImageBg'  WHERE name='$name'";
    echo $query;
    if(!    $result = mysqli_query($conn, $query))
    {
        echo "Query ERROR .<br>";
        die($conn->connect_error);  
    }
    else {
            header( 'location: ../../HTML/userPage.php');

    }
}



if(isset($_POST['userDeleted']))
{

        //put the variables here 
        $userId = $_POST['user-id-remove'];
    
    
        // Insert Post into the Database
        $query = "delete from User WHERE userId=$userId LIMIT 1";
        $query2 = "delete from Post WHERE userId=$userId";
    
        echo $query;
        if(!    $result = mysqli_query($conn, $query))
        {
            echo "Query ERROR .<br>";
            die($conn->connect_error);  
        }
        else
         {
                //Remove all posts from the user
                mysqli_query($conn, $query2);
                header( 'location: ../../HTML/userPage.php');
         }

}

?>