<?php require_once("../PHP/Users/login.php");
$userN = $name?>
<!DOCTYPE html>
<!--This is a test for git-->
<html lang ="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- The link to the css file -->
		<link rel="stylesheet" href="../../CSS/header.css">
		<link rel="stylesheet" href="../../CSS/notifs.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<header>
		
			<a href="home.php">    <i class="fa fa-home" aria-hidden="true"></i><h3>Home</h3></a>
			<a href="../HTML/iso.php"> <i class="fa fa-search" aria-hidden="true"></i><h3>Search</h3></a>
			<a href="UserPage.php"><i class="fa fa-user-o" aria-hidden="true"></i><h3>Profile</h3></a>
			<a href="goodPlans.php"> <i class="fa fa-bomb" aria-hidden="true"></i><h3>Plans</h3></a>
			<a href="Contact.php"> <i class="fa fa-envelope"  aria-hidden="true"> </i><h3>Feedback</h3></a>
			<?php if(isset($_SESSION['connected'])): ?>
        	<a href="connection.php"> <i class="fa fa-power-off"  aria-hidden="true"> </i><h3>Disconnect</h3></a>
<?php else: ?>
			<a href="connection.php"> <i class="fa fa-plug"  aria-hidden="true"> </i><h3>Connection</h3></a>
    <?php endif ?>
		</header>
		<?php if(isset($_SESSION['connected'])): ?>

		        <div class="msg">
            <?php
			echo $_SESSION['connected'];
            ?>
		</div>
		<?php endif ?>

		<?php if(isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
        </div>
		<?php endif ?>
	

	</body>
</html>