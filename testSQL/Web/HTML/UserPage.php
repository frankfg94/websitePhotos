<?php include('C:\wamp\www\websitePhotos\testSQL\Web\PHP\Users\login.php'); ?>
<?php include("Elements/header.html"); ?>

<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>Your Page</title>
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/notifs.css">
        <link rel="stylesheet" href="../CSS/loginStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
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
    <h1 class="profile-intro-title">Welcome to your profile</h1>
    <div id="accordionExample" class="accordion leftProfileMenu animated fadeInLeft faster" >
        <div class="butDiv-container" data-parent="#accordionExample"> 
            <div class="butDiv">
                <a class="btn" data-toggle="collapse" href="#collapse-account" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h1>Account Name</h1>
                    </a>
            <div id="collapse-account" class="collapse">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Settings</button>
            </div>
</div>
        </div>
        <div class="butDiv-container">
            
            <div class="butDiv" >
                <a class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h1>My Posts</h1>
                    </a>
            <div id="collapseExample" class="collapse">
            <button class="animated zoomIn faster createCard" onclick="ShowCardCreator()" >Create</button>
            <button  class="editCard animated zoomIn fast">Edit</button>
            <button class="animated zoomIn " onclick="ShowDeletablePostList()" class="deleteCard">Delete</button>
            </div>
        </div>
        </div>

        <div class="butDiv-container">
        <div class="butDiv">
        <a class="btn" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h1>My Albums</h1>
                    </a>
            <div id="collapse2" class="collapse">
            <button class="animated zoomIn faster editCard">Create</button>
            <button class="animated zoomIn fast editCard">Edit</button>
            <button class="animated zoomIn  editCard">Delete</button>
        </div>
</div>
</div>
<div class="butDiv-container">
        <div  class="butDiv">
            <a class="btn" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h1>My Places</h1>
                    </a>
            <div id="collapse3" class="collapse">
            <button class="animated zoomIn faster editCard">Favorites Places</button>
        </div>
    </div>
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
                
                <button type="submit" name="save">Save</button>
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
            <div id="id01" class="modal">
            
            <form class="modal-content animate" method="POST" action="../PHP/Users/login.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="https://image.flaticon.com/icons/png/128/181/181549.png" alt="Avatar" class="avatar">
            </div>
            
            <div class="container">
                <label for="name"><b>Username</b></label>
                <input id="name2" type="text" placeholder="Username" name="name2" required>
                
                <label for="password"><b>Password</b></label>
                <input id="password2" type="password2" placeholder="Password" name="password2" required>
                
                <button type="submit" name="save">Register</button>
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
            <?php include("Elements/footer.html"); ?>

	</body>
	
	<!--footer part-->

	</html>
