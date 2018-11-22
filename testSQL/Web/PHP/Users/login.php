<?php

//Initialize variables for Database
$servername = "den1.mysql2.gear.host";
$username = "photosprojet";
$password = "123456!";
$dbname = "photosprojet";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully". "<br>";

// Retrieve database results

//Initialize variables for Database Post Table
$password = "";
$name = "";

/*
*/
session_start();


// Check button click
if(isset($_POST['save']))
{
    echo "DEBUT";
    $password = $_POST['password'];
    $name = $_POST['name'];


    // Insert Post into the Database
    $query = "SELECT * FROM User WHERE name='$name' AND password='$password'";
    echo "Query created : . $query";

    if(!$result = mysqli_query($conn, $query))
    {
        echo "Query ERROR .<br>";
        die($conn->connect_error);  
    }
    else {
        echo "Query DONE .<br>";

        // if the user is found
        if(mysqli_num_rows($result) > 0)
        {
            echo "Result FOUND";

            $row = mysqli_fetch_array($result);

            if($row['name'] == $name && $row['password'] == $password)
            {
                // Display notification
                $_SESSION['msg'] ="Success! You are now connected as $name";
            }
            else
            {
                $_SESSION['msgErr'] ="Error, incorrect user or password";
            }
        }
        else
        {
            echo "Nothing Found";
            $_SESSION['msgErr'] ="Error, incorrect user or password";
        }
        // Redirect to index page
       header('location: ../../HTML/UserPage.php');
    }
    echo "FIN";

}
 
?>