<!DOCTYPE html>
<html>
<head>
        <?php include('C:\wamp\www\websitePhotos\testSQL\Web\PHP\CRUD\createUser.php'); ?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/connection.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet"  type="text/css" href="../CSS/notifs.css"/>

    <script>
  

    window.onload = function()
    {
        var pwd = document.getElementById('pwd');
    var eye = document.getElementById('eye');
    eye.addEventListener('click',togglePass);
    }

    function togglePass()
    {
        eye.classList.toggle('active');
        if(pwd.type == 'password') pwd.type ='text';
        else pwd.type = 'password';
    }

    </script>
</head>
<body>
<?php include("Elements/header.html"); ?>
<?php if(isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>
   <?php endif ?>
    <div class="box">
        <h2>Login</h2>
        <form method="POST" action="../PHP/Users/login.php">  
            <div class="inputBox">
                <input type="text" name="name" required="">
                <label>Username</label>
            </div>
            <div class="inputBox">
                
                <input type="password" id="pwd" name="password" required="">
                <label>Password</label>
                <i class="fa fa-eye" id="eye" ></i>
                </div>
                <input type="submit" name="save" value="Submit">
                <hr>
                <input onclick="location.href='subscribe.php';" type="button" value="Create Your Account Now" ></input>
                <a href="forgotPassword.php" style="text-decoration:none;"><h4>Forgot Password?</h4></a>
            </form>
    </div>
</body>
</html>