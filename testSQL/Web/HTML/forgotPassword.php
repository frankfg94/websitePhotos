<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/connection.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

</head>
<body>
        <?php include("Elements/header.php"); ?>
    <div class="box">
        <h2>Forgot Password</h2>
        <h4>Type in your Email Address to request a password reset</h4>
        <form>  
                <div class="inputBox">
                        <input type="email" name="" required="">
                        <label>Email Address</label>
                    </div>
                <input type="submit" name="" value="Send">
                <hr>
                <input onclick="location.href='connection.php';" type="button" value="Go Back To Login Page" ></input>
                
            </form>
    </div>
</body>
</html>