<?php
include_once('../PHP/connectToMySql.php');
$request="SELECT title, description, albumId
FROM Album;";
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
    <?php include("Elements/header.php"); ?>
        <br />
        <br />
        <br />
        <div>
            <h1>My Albums</h1>
            <br />
            <form method="post" action="viewAlbum.php">
                <select  name="num">
                    <?php
                    while($row = $result->fetch_assoc()) 
                    {
                    ?>
                        <option value="<?php echo $row['albumId'] ?>"><?php echo $row['title']; ?></option>
                    <?php
                    }
                    ?> 
                </select>
                <button type="submit" value="<?php echo $row['albumId'] ?>" >Choose</button>
            </form>
        </div>

        <p><strong>Design in progress !!!</strong></p>
<?php include('viewAlbumPack.php'); ?>  
    <!--footer part-->
    <button ><a href="UserPage.php" >Go Back</a></button>
    <?php include("Elements/footer.html"); ?>
    </body>
</html>