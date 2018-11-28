<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/connection.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="../CSS/header.css">


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
    <div class="box">
        <h2>Login</h2>
        <form>  
            <div class="inputBox">
                <input type="text" name="" required="">
                <label>Username</label>
            </div>
            <div class="inputBox">
                
                <input type="password" id="pwd" name="" required="">
                <label>Password</label>
                <i class="fa fa-eye" id="eye" ></i>
                </div>
                <input type="submit" name="" value="Submit">
                <hr>
                <input onclick="location.href='subscribe.html';" type="button" value="Create Your Account Now" ></input>
                <a href="forgotPassword.html" style="text-decoration:none;"><h4>Forgot Password?</h4></a>
            </form>
    </div>
</body>
</html>