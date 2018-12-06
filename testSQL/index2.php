<?php
include_once('Web/PHP/connectToMySql.php');
include('Web/PHP/Users/login.php');
$request="select * from Post";
$result = $conn->query($request);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picture Post Testing</title>
    <link rel="stylesheet" type="text/css" href="Web/CSS/main.css"/>
    <link rel="stylesheet" type="text/css" href="Web/CSS/notifs.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="Web/CSS/imageFilters.css"/>
    <script>
function fadeInPage() {
    if (!window.AnimationEvent) { return; }
    var fader = document.getElementById('fader');
    fader.classList.add('fade-out');
}


    function DownloadImg(event,linkEl)
    {
        var clickedAnchor = event.target;
        var myDiv = clickedAnchor.parentNode.parentNode;
        var myImage = myDiv.children[1].children[0];
        linkEl.href = myImage.src;
        clickedAnchor.download=myImage.src;
    }



    function ApplyFilter(value, img)
        {
     var className = "";
            alert("Function start !");  
            if(value==0) className = "saturate";
      else if(value==1) className = "grayscale";
      else if (value==2) className = "contrast";
      else if(value==3) className = "brightness";
      else if (value==4) className = "blur";
      else if(value==5) className = "invert";
      else if (value==6) className = "sepia";
      else if(value==7) className = "huerotate";
      else if (value==8) className = "opacity";
      else className=""; // Default className is empty

      img.className = className;
        }
        </script>
</head>
<body >

        <svg id="fader"></svg>
        <script>
            fadeInPage();
        </script>
   <header>
       
            <a href="index.php">    <i class="fa fa-home" aria-hidden="true"></i><h3>Home</h3></a>
            <a href="Web/HTML/search.php"> <i class="fa fa-search" aria-hidden="true"></i><h3>Search</h3></a>
            <a href="Web/HTML/UserPage.php"><i class="fa fa-user-o" aria-hidden="true"></i><h3>Profile</h3></a>
            <a href="Web/HTML/goodPlans.php"> <i class="fa fa-bomb" aria-hidden="true"></i><h3>Good Plans</h3></a>
            <a href="Web/HTML/Contact.php"> <i class="fa fa-envelope"  aria-hidden="true"> </i><h3>Contact</h3></a>
    </header>
    <section class="container">
        <h1 id="mainTitle">Pictures in our database</h1>
        <a href="Web/HTML/home.php">Nouvelle Page</a>;
        <?php if(isset($_SESSION['edit'])): ?>

<div class="msg">
<?php
echo $_SESSION['edit'];
unset($_SESSION['edit']);
?>
</div>
<?php endif ?>
    <?php
      while($row = $result->fetch_assoc()) 
     {
        $userId = $row['userId'];
        $requestUser="SELECT * FROM User WHERE userId=$userId"; // User Associated for each different Post
        $result2 = $conn->query($requestUser);
        $resultUser = $result2->fetch_assoc();

        ?>
         <form action="./Web/PHP/CRUD/server.php" method="POST">
            <input type="hidden" name="photoId" value="<?php echo $row['photoId'] ?>">

                      <div class="card not-bootstrap">        
             <div class="card-header">
             <a href="./Web/PHP/CRUD/server.php?del=<?php echo $row['photoId']; ?>" ><button type="button" onclick="this.parentElement.parentElement.parentElement.style.display='none';"   class="remove-post">x</button></a>
                 <div class="profile-image">
                 <img  draggable="false"  ondragstart="return false"  class="icon" src="<?php echo $resultUser['profileImage']?>">
                 </div>
                 <div class="profile-info">
                     <div class="name"><?php echo $resultUser['name']; ?></div>
                     <div class="location">
                         <input type="text" name="location" value=" <?php echo $row['location'] ?>">
                        </div>
                 </div>
                 <div class="date">
                        <input style="width:100%" name="date" type="text" value=" <?php echo $row['uploadDate'] ?>">
                     </div>
             </div>
             <div class="card-content">
                 <img id="img"  draggable="false" class="<?php echo $row['filterName'] ?>" ondragstart="return false" src="<?php echo $row['photoPath'] ?>">
                 <input name="photoPath" style="width:98%" value="<?php echo $row['photoPath'] ?>">
             </div>
             <div class="card-footer">
                 <div class="description">
                 <input name="description" style="width:100%" type="text" value="<?php echo $row['title'] ?>">
                 </div>  
                 <div class="comments">
                     <p><span class="username">François</span>Test de commentaire</p>
                     <p><span class="username">user1234</span>Sympa!</p>
                 </div>
                 <a href="#" onclick="DownloadImg(event,this)" class="dlBtn" download>Download image</a>
                     <div>
                         <button class="save-btn-edit-cards" name="update" type="submit">Save</button>
                     </div>
             </div>
         </div>

        </form>

    <?php   
     }
     ?>
    </section>
    <footer>
			<div class="mainDiv">
				<div class="footerLeft">
					<h3>Website Plan</h3>
					<ul>
                    <li><a href="index.php">Home</a></li>
                        <li><a href="Web/HTML/search.php">Search</a></li>
                        <li><a href="Web/HTML/UserPage.php">Profile</a></li>
                        <li> <a href="Web/HTML/goodPlans.php">Good Plans</a></li>
                        <li> <a href="Web/HTML/Contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="topnav footerRight">
					<div>
						<h3>Contact Information</h3>
						<ul class="ul-website-plan">
                        <li><button><i class="fa fa-facebook"></i></button></li>
                        <li><button><i class="fa fa-twitter"></i></button></li>
                        <li><button><i class="fa fa-envelope"></i></button></li>
                        <li><button><i class="fa fa-location-arrow"></i></button></li>
						</ul>
					</div>
				</div>
			</div>
			</footer>

</body>
</html>