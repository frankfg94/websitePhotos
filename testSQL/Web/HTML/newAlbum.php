<?php
include_once("../PHP/connectToMySql.php");
$request="select * from Post";
$result = $conn->query($request);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- The link to the css file -->
    <!-- The title of the page -->
    <title>User Profile</title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/notifs.css">
    <link rel="stylesheet" href="../CSS/form.css">
</head>

<body>
    <!--Main div to be included in userPage-->
    <div id="albumDiv">
        <h1>Please fill the fields to create your album.</h1>

        <!--Step 1-->
        <div id="step1">
            <div>
                <ul class="progressbar">
                    <li class="active">Create Album</li>
                    <li>Add Photos</li>
                </ul>
            </div>
            <div>
                <!--Step 1 form-->
                <form method="post" action="../PHP/CRUD/createAlbum.php">
                    <div class="formDiv">        
                        <input id="inputText" type="text" name="albumTitle" id="albumTitle" placeholder="Album Name" required/><br />
                        <textarea name="description" id="description" placeholder="Your Album Description" maxlength="500"></textarea>
                        <br />
                        <table>
                            <tr>
                                <td><input type="reset" value="Cancel" /></td>
                                <td><button type="submit" value="Create" name="saveAlbum" onclick="step2()">Create</button></td>
                            </tr>
                        </table>
                    </div>         
                </form>
            </div>
        </div>

        <!--Step 2-->
        <div id="step2">
            <div>
                <ul class="progressbar">
                    <li>Create Album</li>
                    <li class="active">Add Photos</li>
                </ul>
            </div>
            <div>
                <h1 id="mainTitle">Choose the pictures you want to add to your album.</h1>
                <!--Step 2 form-->
                <form method="post" action="../PHP/CRUD/insertAlbum.php">
                    <?php
                    while($row = $result->fetch_assoc()) 
                    {
                    ?>
                        <div class="card">        
                            <div class="card-header">
                                <div class="profile-image">
                                    <img  draggable="false" ondragstart="return false" class="icon" src="https://www.usinenouvelle.com/mediatheque/8/9/9/000205998_image_896x598/tank-furtif-polonais-pl-01.jpg">
                                </div>
                                <div class="profile-info">
                                    <div class="name">François Gillioen</div>
                                    <div class="location"><?php echo $row['location'] ?></div>
                                </div>
                                <div class="date"><?php echo $row['uploadDate'] ?> </div>
                            </div>
                            <div class="card-content">
                                <img draggable="false" ondragstart="return false" src="<?php echo $row['photoPath'] ?>" width="auto" height="auto">
                            </div>
                            <div class="card-footer">
                                <div class="description">
                                <?php echo $row['title'] ?>
                                </div>
                                <div>
                                    <input type="checkbox" name="add[]" value="<?php echo $row['photoId'] ?>">Add to Album</button>
                                </div>
                            </div>
                        </div>
                    <?php   
                    }
                    ?>
                    <button type="submit" value="add" name="addPhotos">Add to Album</button>
                </form>
            </div>
        </div>
    </div>
</body>     

<!--JavaScript functions-->
<script>

        //Display step 2 divs and hide step 1 divs
        function step2()
        {
            var step1 = document.getElementById("step1");
            var step2 = document.getElementById("step1");
    
            if(document.getElementById("inputText").innerHTML != "")
            {
                step1.style.display="none";
                step2.style.display="block";
            }
        }
    
        //Display step 1 divs and hide step 2 divs
        window.onload = function()
        {
            var step1 = document.getElementById("step1");
            var step2 = document.getElementById("step2");
  
            step1.style.display="block";
            step2.style.display="none";
        }
    </script>

</html>