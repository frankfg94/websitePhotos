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
echo "Connected successfully to database". "<br>";

// Retrieve database results

//Initialize variables for Database Post Table
$password = "";
$name = "";
$connected = "";


session_start();
    
/*
echo basename($_SERVER["SCRIPT_FILENAME"]) ."<br>";
// If the user is connected
if( session_status() == PHP_SESSION_ACTIVE  )
{

    echo "we are connected!" . "<br>"; 

    // ... And we're on the connection page, we disconnect him
 if( basename($_SERVER["SCRIPT_FILENAME"]) == "connection.php")
 {

        echo "Disconnecting because we're on connection.php" . "<br>";
        echo "current session destroyed" . "<br>";  
     session_destroy();

 }
}
// if the user is NOT connected
else
{
    echo "session is inactive";
    //  but we're on the connection page, we allow him to iniate a new login
    if(basename($_SERVER["SCRIPT_FILENAME"]) == "connection.php")
 {
     echo "But we are on the connection page connection.php!" . "<br>";   
     echo "starting a new session" . "<br>";
 }
}


*/

$_SESSION['msgDisconnect'] = "You are now disconnected";

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
                echo "session started";

                // Display notification
                $_SESSION['msg'] ="Success! You are now connected as $name";
                $_SESSION['connected'] = "Connected as $name !";
                echo  $_SESSION['msg'];
                echo $_SESSION['connected'];
            }
            else
            {
                echo "login failed";
                echo "destroying session";
                $_SESSION['msgErr'] ="Error, incorrect user or password";
                
            }
        }
        else
        {
            echo "destroying session";
            echo "Nothing Found";
            $_SESSION['msgErr'] ="Error, incorrect user or password";

        }
        // Redirect to index page
       header('location: ../../HTML/UserPage.php');
    }
    echo "FIN";

}
 
?>