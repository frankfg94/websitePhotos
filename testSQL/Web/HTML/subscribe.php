<?php include('C:\wamp\www\websitePhotos\testSQL\Web\PHP\CRUD\createUser.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscribe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/connection.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet"  type="text/css" href="../CSS/notifs.css"/>
    <link rel="stylesheet"  type="text/css" href="../CSS/header.css"/>


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
    <?php if(isset($_SESSION['msgErr'])): ?>
    <div class="msgErr">
        <?php
        echo $_SESSION['msgErr'];
        unset($_SESSION['msgErr']);
        ?>
    </div>
    <?php endif ?>
    <div class="box">
        <h2>Subscribe</h2>
        <form  method="POST" action="../PHP/CRUD/createUser.php">  
                <div class="inputBox">
                        <input type="email" name="mail" required="">
                        <label>Email Address</label>
                    </div>
            <div class="inputBox">
                <input type="text" name="name" required="">
                <label>Username</label>
            </div>
            
            <div class="inputBox">
                
                <input pattern=".{6,}" type="password" id="pwd" name="password" placeholder="At Least 6 Characters" required="">
                <label>Password</label>
                <i class="fa fa-user-o" id="eye" ></i>
                </div>
                <input type="submit" name="save" value="Subscribe">
                <hr>
                <input onclick="location.href='connection.php';" type="button" value="I Already Have An Account" ></input>
                
            </form>
    </div>
</body>
</html>