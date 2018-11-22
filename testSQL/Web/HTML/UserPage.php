<?php include('C:\wamp\www\websitePhotos\testSQL\Web\PHP\Users\login.php'); ?>
<?php include("Elements/header.html"); ?>

<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>Contact</title>
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/notifs.css">
        <link rel="stylesheet" href="../CSS/loginStyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
<script>

    function SelectImage()
    {
    // Start the Select File Dialog
        document.getElementById('file-input').click();
  
    }

    function ChangeVisibilityPassword()
    {
        var input = document.getElementById("password");
            if(input.type == "password")
            {
                input.type = "text";
            }
            else
            {
                input.type = "password";
            }
    }

    function LoadImg()
    {
              // FileReader support
     var files =  document.getElementById('file-input').files;
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('img').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }

    }

    function DownloadImg()
    {
        alert("Dowloading the picture...");
        var myImgSrc = document.getElementById("smallImage").getElementsByTagName("img")[0].src;

    }

    function ShowDeletablePostList()
    {
        document.getElementById('iframeDelPosts').style.display='block';
    }

    function ShowCardCreator()
    {
        document.getElementById('createCard').style.display='block';
    }

    window.onload = function()
    {
        const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"];
  const dayNames = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",
  "Sunday"];

    const d = new Date();
    document.getElementById("date").innerHTML = dayNames[d.getDay()]  + " " +d.getDate() +" "+monthNames[d.getMonth()];
    }
</script>
    </head>
    
    <body>  

        <!-- The Navigation bar -->
        
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
        <div class="butDiv">
            <h1>Login</h1>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </div>
        <div class="butDiv">
            <h1>Your Posts</h1>
            <button onclick="ShowCardCreator()" class="createCard">Create</button>
            <button class="editCard">Edit</button>
            <button onclick="ShowDeletablePostList()" class="deleteCard">Delete</button>
        </div>
        <div>
            <iframe id="iframeDelPosts" src="../PHP/postList.php"></iframe>
        </div>
        <form action="../PHP/CRUD/">
        <div id="createCard" class="card">        
            <div class="card-header">
                <button onclick="this.parentElement.parentElement.style.display='none';"   class="remove-post">x</button>
                <div class="profile-image">
                    <img alt="François's User Icon" draggable="false"   ondragstart="return false"  class="icon" src="https://www.usinenouvelle.com/mediatheque/8/9/9/000205998_image_896x598/tank-furtif-polonais-pl-01.jpg">
                </div>
                <div class="profile-info">
                    <div class="name">François Gillioen</div>
                    <div class="location"><input type="text" placeholder="Enter the place"></div>
                </div>
                <div id="date" class="date"></div>
            </div>
            <div class="card-content">
                <input id="file-input" onchange="LoadImg()" type="file" name="name" accept="image/*" style="display: none;" />
                <img alt="" id="img" draggable="false"  ondragstart="return false"   onclick="SelectImage()" src="http://www.kensap.org/wp-content/uploads/empty-photo.jpg">
                <div class="imageDescrText">Change Image</div>
            </div>
            <div class="card-footer">
                <div class="description">
                    <input type="text" placeholder="Enter the description of the image">
                </div>  
                <div class="comments">
                    <p><span class="username">Comment Area</span>Here will be added your future comments</p>
                </div>
                <div>
                    <button onclick="DownloadImg()" class="dlBtn">Download image</button>
                </div>
            </div>
</form>
        </div>
        <div id="id01" class="modal">
            
            <form class="modal-content animate" method="POST" action="../PHP/Users/login.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="https://image.flaticon.com/icons/png/128/181/181549.png" alt="Avatar" class="avatar">
            </div>
            
            <div class="container">
                <label for="name"><b>Username</b></label>
                <input id="name" type="text" placeholder="Enter Username" name="name" required>
                
                <label for="password"><b>Password</b></label>
                <input id="password" type="password" placeholder="Enter Password" name="password" required>
                
                <button type="submit" name="save">Login</button>
                <label>
                <input type="checkbox" checked="checked" onclick="ChangeVisibilityPassword()" name="hidePassword"> Hide password
              </label>
                <label class="row-label">
                    <input type="checkbox" checked="checked" name="remember"> Remember me

                </label class="row-label">
            </div>
            
            <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div>
            
            </div>
            <?php include("Elements/footer.html"); ?>

	</body>
	
	<!--footer part-->

	</html>
