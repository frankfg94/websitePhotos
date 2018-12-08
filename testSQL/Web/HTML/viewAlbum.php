<?php
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
?>
<p><strong>Work in progress</strong></p>
<?php
// Check button click
if(isset($_POST['albumId']))
{
    //put the variables here
    $albumId = $_POST['albumId'];   
}

echo "$albumId";

$query="SELECT Album.title, Album.description, photoPath, userId, Post.title FROM Post JOIN albumpost ON Post.photoId=albumpost.photoId JOIN Album ON Album.albumId='$albumId';";
$results = msqli_query($conn, $query);

if (sizeof($results) >= 0)
{
    echo "empty";
}
?>


<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>My Albums</title>
		<link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    </head>
    
    <body>

    <?php include("Elements/header.php"); ?>
    <br />
        <br />
        <br />
        <br />
        <h1><?php echo $row['album.title']; ?></h1>
        <div >
            <ul class="undottedLi">
            <?php
                while($row = $result->fetch_assoc()) 
                {
                ?>
                   <li class="undottedLi" >
                       <div class="butDiv">
                            <div>
                                <?php echo $row['title']; ?> 
                            </div>
                            <br>
                            <div>
                                <img class="listImg" src="<?php echo $row['photoPath'] ?>">
                            </div>
                       </div>
                    </li>
                <?php
                }
                ?> 
        </div>
    <!--footer part-->
    <?php include("Elements/footer.html"); ?>
    </body>
</html>