<?php
include_once('../PHP/connectToMySql.php');
$request="SELECT * FROM album ORDER BY albumId DESC";
$result = $conn->query($request);
?>

<?php include_once("Elements/headerSimple.php"); ?>

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
        <div >
        <br />
        <br />
        <br />
        <h2 style="padding-left:10%" >View your Albums</h2>
            <ul class="undottedLi">
                <?php
                $i = 1;
                while($row = $result->fetch_assoc()) 
               {
                   echo "Album N° " ;
                   echo $i++;
                ?>
                   <li class="undottedLi" >
                       <div class="butDiv">
                            <div>
                                <?php echo $row['title']; ?>
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
                    <hr>
                <?php
                }
                ?> 
            </ul>
        </div>
    <!--footer part-->
    <?php include("Elements/footer.html"); ?>
    </body>
</html>