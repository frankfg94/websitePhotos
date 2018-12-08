<?php
include_once('../PHP/connectToMySql.php');

$request2="SELECT * from Post";
$resultPost = $conn->query($request2);
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
    <br>
    <br>
    <br>
    <br>
    <?php include("Elements/header.php"); 
    if(isset($_POST['num']))
    {
        $albumId = $_POST['num'];
        echo "You Selected Album n°". $albumId;
        $request="SELECT title, description, albumId FROM Album WHERE albumId=$albumId";
        echo $request;
        $resultAlbum = $conn->query($request);
        $album=$resultAlbum->fetch_assoc();
    }
    else 
    {
        echo "num isn't set";
    }

    ?>

    <h1>Title : <?php echo $album['title'];?></h1>
    <h4>description : <?php echo $album['description'];?></h4>

        <input type="hidden" value="addPhotos">
        <p><strong>Design in progress !!!</strong></p>
        <form method="post" action="../PHP/CRUD/insertAlbum.php">
            <fieldset>
              <legend>Choose the pictures you want to add to your album.</legend>
                <?php
                while($row = $resultPost->fetch_assoc()) 
                {
                ?>
                <div class="card-not-bootstrap">        
                  <div class="card-header">
                    <div class="profile-image">
                      <img  draggable="false" ondragstart="return false" class="icon" src="https://www.usinenouvelle.com/mediatheque/8/9/9/000205998_image_896x598/tank-furtif-polonais-pl-01.jpg">
                    </div>
                    <div class="profile-info">
                      <div class="name">François Gillioen</div>
                      <div class="location"><?php echo $row['location'] ?></div>
                    </div>
                    <div class="date"><?php echo $row['uploadDate'] ?> </div>
                  </div>
                  <div class="card-content">
                    <img draggable="false" ondragstart="return false" src="<?php echo $row['photoPath'] ?>" width="auto" height="auto">
                  </div>
                  <div class="card-footer">
                    <div class="description">
                      <?php echo $row['title'] ?>
                    </div>
                    <div>
                      <input type="checkbox" name="add[]" value="<?php echo $row['photoId'] ?>">Add to Album</button>
                    </div>
                  </div>
                  <?php   
                  }
                  ?>
                  </fieldset>
                  <input type="text" name="albumId" value="<?php echo $albumId; ?>">
                  <button type="submit" value="add" name="addPhotos">Add to Album</button>
                </form>

    <!--footer part-->
    <?php include("Elements/footer.html"); ?>
    </body>
</html>