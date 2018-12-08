<?php include("Elements/header.php");
include_once("../PHP/connectToMySql.php");
$request="select * from Post";
$result = $conn->query($request); //Getting all posts
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <meta charset="utf-8">
    <title>Simple Markers</title>
    <style>
    
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
       
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
  

<!-- GEOCODING ALGORITHM -->
    <div id="map"></div>


    <?php $i=0; ?>
    <script>
      function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

  var audio = new Audio("../AUDIO/load.wav");
      function initMap() {
          
          var myLatLng = {lat: -25, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });
        <?php 
    while($row = $result->fetch_assoc()) 
{
    ?>

        sleep(1500);
      audio.play();

(function()
{

       var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading"><?php echo $row['location']; ?></h1>'+
            '<div id="bodyContent">'+
            '<p><?php echo $row['title'] ;?></p>'+
            '<img class="img-medium-resized" src="<?php echo $row['photoPath']; ?>"'+
            '</div>'+
            '</div>';


    var marker = new google.maps.Marker(
        {
          position: {lat: -25+<?php echo $i++;?>, lng: 131.044},
          map: map,
          title: "<?php echo $row['location'];?>"
        });




        

           
   var infowindow = new google.maps.InfoWindow({
          content: contentString
        });



                  marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

}());

        
        <?php
        } 
    ?>
    /*
    var imgs = document.getElementsByClassName("img");
    var index;
    for ( index = 0; index < imgs.length; index++) {
      var img = imgs[index];
      img.src = img.src;
      alert(img.src);
    }
    */


      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFd007mdcwM9pmcejYa4D1WPxsfJwgMzE&callback=initMap">
    </script>
  </body>
</html>