<?php
include_once('Web/PHP/connectToMySql.php');
$request="select * from Post";
$result = $conn->query($request);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Picture Post Testing</title>
    <link rel="stylesheet" type="text/css" href="Web/CSS/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body >
   <header>
            <a href="index.php">    <i class="fa fa-home" aria-hidden="true"></i><h3>Home</h3></a>
            <a href="Web/HTML/search.php"> <i class="fa fa-search" aria-hidden="true"></i><h3>Search</h3></a>
            <a href="Web/HTML/UserPage.php"><i class="fa fa-user-o" aria-hidden="true"></i><h3>Profile</h3></a>
            <a href="Web/HTML/goodPlans.php"> <i class="fa fa-bomb" aria-hidden="true"></i><h3>Good Plans</h3></a>
            <a href="Web/HTML/Contact.php"> <i class="fa fa-envelope"  aria-hidden="true"> </i><h3>Contact</h3></a>
    </header>
    <section class="container">
        <h1 id="mainTitle">Pictures in our database</h1>
    <?php
      while($row = $result->fetch_assoc()) 
     {
         ?>
         <div class="card">        
             <div class="card-header">
             <button onclick="this.parentElement.parentElement.style.display='none';"   class="remove-post">x</button>
                 <div class="profile-image">
                 <img  draggable="false"   ondragstart="return false"  class="icon" src="https://www.usinenouvelle.com/mediatheque/8/9/9/000205998_image_896x598/tank-furtif-polonais-pl-01.jpg">
                 </div>
                 <div class="profile-info">
                     <div class="name">François Gillioen</div>
                     <div class="location"><?php echo $row['location'] ?></div>
                 </div>
                 <div class="date"><?php echo $row['uploadDate'] ?> </div>
             </div>
             <div class="card-content">
                 <img    draggable="false"  ondragstart="return false" src="<?php echo $row['photoPath'] ?>">
             </div>
             <div class="card-footer">
                 <div class="description">
                 <?php echo $row['title'] ?>
                 </div>  
                 <div class="comments">
                     <p><span class="username">François</span>Test de commentaire</p>
                     <p><span class="username">user1234</span>Sympa!</p>
                 </div>
             </div>
         </div>
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