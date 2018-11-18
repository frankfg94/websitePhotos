<?php
include_once('../PHP/connectToMySql.php');
$request="select * from Post";
$result = $conn->query($request);

?>



<!DOCTYPE html>
<html lang ="en">
    <head>
            <script>
function AskDeletion(event)
{
        if(confirm('Do you want to delete this Post?'))
    {
        var clickedBut = event.target;
        var deleteRequest = "delete from Post where title='" + clickedBut.parentNode.parentNode.childNodes[1].innerHTML+"'";
        clickedBut.parentNode.parentNode.style.display='none';
        alert('Post deleted from the Database!');
} 
}
            </script>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>Contact</title>
		<link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
        <div >
            <ul class="undottedLi">
                <?php
                while($row = $result->fetch_assoc()) 
               {
                   ?>
                   <li class="undottedLi" >
                       <div class="butDiv">
                       <div>
                                      <?php echo $row['title']; ?>
    
                        </div>
                        <br>
                        <div>
                           <img class="listImg" src="<?php echo $row['photoPath'] ?>"></img>
                        <?php 
                        echo $row['uploadDate'] . " ";
                        echo $row['location'];
                        ?>
                        </div>
                        <div class="post-information">
                       <button onclick="AskDeletion(event)" >Delete </button>
                       </li>
                       </div>
                   <?php
               }
                      ?> 
            </ul>
        </div>
</body>
</html>