<?php

// Check button click
if(isset($_POST['num']))
{
    //put the variables here
    $albumId = $_POST['num'];  
    echo "Album ID is" . $albumId; 
}
else 
{
    echo "albumId not set";
    $albumId=0;
}

$query="SELECT Album.title AS albTitle, Album.description, photoPath, userId, Post.title FROM Post JOIN albumpost ON Post.photoId=albumpost.photoId JOIN Album ON Album.albumId=$albumId";
echo $query;
$results = mysqli_query($conn, $query);
 $album=$results->fetch_assoc();
?>

?>
<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>My Albums</title>
		<link rel="stylesheet" href="../CSS/main.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    </head>
    
    <body>

    <br />
        <br />
        <br />
        <br />
        <div >
        <br />
        <br />
        <br />
        <h1><?php echo $album['albTitle']; ?> </h1>
        <ul class="undottedLi">
            <li class="undottedLi" >
                       <div class="butDiv">
                            <div>
                                <?php echo $album['title']; ?> 
                            </div>
                            <br>
                            <div>
                                <img class="listImg" src="<?php echo $album['photoPath'] ?>">
                            </div>
                       </div>
                    </li>
                    <hr>
            <?php
                while($row = $results->fetch_assoc()) 
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
                    <hr>
                <?php
                }
                ?> 
        </div>
    <!--footer part-->
    </body>
</html>