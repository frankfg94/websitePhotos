<?php include("Elements/header.php"); ?>
<!DOCTYPE html>
<!--This is a test for git-->
<html lang ="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>Feedback</title>
		<link rel="stylesheet" href="../CSS/contactResponsive.css">
		<link rel="stylesheet" href="../CSS/main.css">
		<link rel="stylesheet" href="../CSS/notifs.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    </head>
	
	<body>
	<?php include_once("../PHP/CRUD/createFeedback.php"); ?>
	<?php if(isset($_SESSION['mailSent'])): ?>
        <div class="msg">
            <?php
            echo $_SESSION['mailSent'];
		?>
        </div>
        <?php endif ?>
	<form class="form" method="POST" action="../PHP/CRUD/createFeedback.php">
			<h1 class="animated fadeInLeft faster">Send us your feedback</h1>
			<h3 style="color:rgb(63, 63, 63)">Don't hesitate to tell us what you think of our website!</h3>
			<input name="from" type="email" placeholder="Email Address" required class="inputMail">
			<input name="name" required type="text" placeholder="Name" class="inputFirstName">
			<input name="subject" required type="text" placeholder="Subject" class="inputLastName">
			<textarea name="message" required maxlength="2500" placeholder="Your Message" class="inputMsg"></textarea>
			<input type="submit" name="saveContact" value="Submit">
	</form>
	<!--footer part-->
	<?php include("Elements/footer.html"); ?>

	</body>
	</html>
	