<?php include("../PHP/contactMail.php") ; ?> 
<?php include("Elements/header.html"); ?>
<!DOCTYPE html>
<!--This is a test for git-->
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>Contact</title>
		<link rel="stylesheet" href="../CSS/main.css">
		<link rel="stylesheet" href="../CSS/notifs.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
		
    </head>
	
	<body>
    <?php if(isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>
    <?php endif ?>


	<form class="form" method="POST" action="../PHP/contactMail.php">
			<h1>Contact Us</h1>
			<h3 style="color:rgb(63, 63, 63)">Don't hesitate to tell us what you think of our website!</h3>
			<input name="from" type="email" placeholder="Email Address" required class="inputMail">
			<input name="name" type="text" placeholder="Name" class="inputFirstName">
			<input name="subject" type="text" placeholder="Subject" class="inputLastName">
			<textarea name="message" maxlength="2500" placeholder="Your Message" class="inputMsg"></textarea>
			<input type="submit" value="Submit">
	</form>
	
	<!--footer part-->
	<?php include("Elements/footer.html"); ?>

	</body>
	</html>
	