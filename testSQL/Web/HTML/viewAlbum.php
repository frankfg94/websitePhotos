<?php
include_once('../PHP/connectToMySql.php');
$request="SELECT Album.title, Album.description, photoPath, userId, Post.title
FROM Post JOIN albumpost ON Post.photoId=albumpost.photoId JOIN Album ON Album.albumId=albumpost.albumId;";
$result = $conn->query($request);
?>

<!--?php include_once("Elements/headerSimple.php"); ?-->

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
        <div >
            <ul class="undottedLi">
                <?php
                while($row = $result->fetch_assoc()) 
               {
                ?>
                   <li class="undottedLi" >
                       <div class="butDiv">
                            <div>
                                <?php echo $row['album.title']; ?>
                            </div>
                            <br>
                            <div>
                                <!--img class="listImg" src="<-?php echo $row['photoPath'] ?>"/-->
                                <?php 
                                echo $row['description'];
                                ?>
                            </div>
                       </div>
                    </li>
                <?php
                }
                ?> 
            </ul>
        </div>
    <!--footer part-->
    <?php include("Elements/footer.html"); ?>
    </body>
</html>