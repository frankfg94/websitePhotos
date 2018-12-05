<?php include("../PHP/Users/login.php");?>

<?php include_once("Elements/headerSimple.php"); ?>

<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The link to the css file -->
		<!-- The title of the page -->
		<title>User Profile</title>
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/notifs.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
        <link rel="stylesheet" href="../CSS/designList.css">
        <link rel="stylesheet" href="../CSS/imageFilters.css">
        <script src="../JS/geolocation.js"></script>
        <script>



    function SelectImage()
    {
        // Start the Select File Dialog
        document.getElementById('file-input').click();
  
    }



    function hideDivs()
    {
       var left = document.getElementById("left");
       var right = document.getElementById("right");
       var bottom = document.getElementById("bottom");
       var album = document.getElementById("album2");
       var footer = document.getElementById("footerAlbum");

        left.style.display="none";
        right.style.display="none";
        bottom.style.display="none";
        album.style.display="block";
        footer.style.display="block";


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
        document.getElementById('publish-btn').style.display='inline-block';
    }

    window.onload = function()
    {
        var album = document.getElementById("album2");
        var footer = document.getElementById("footerAlbum");

        album.style.display="none";
        footer.style.display="none";
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
        



    <h1 class="profile-intro-title">Welcome to your profile</h1>
    
    <!--Accordion Menu-->
    <div id="accordionExample" class="accordion leftProfileMenu animated fadeInLeft faster" >
        <!--Profile picture-->
        <div class="card-profile-navbar"> 
            <div >
              <div >
                <img alt="Profile Image" draggable="false" ondragstart="return false"  class="icon-center-div" src="<?php echo $_SESSION['profileImage']?>">
                <img height="130px" width="100%" src="<?php echo $_SESSION['profileImageBg']?>"></img>
                </div>
              
                <h3>	<?php if(isset($_SESSION['name'])): ?>
        <div >
            <?php
            echo $_SESSION['name'];
		?>
        </div>
		<?php endif ?></h3> 
            </div>
        </div>

        <!--Account-->
        <div class="butDiv-container" data-parent="#accordionExample"> 
            <div class="butDiv">
                <a class="btn" data-toggle="collapse" href="#collapse-account" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h1>Account Name</h1>
                    </a>
            <div id="collapse-account" class="collapse">
                <button style="width:auto;">Settings</button>
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
            <a style="color:rgb(59, 59, 59);" href="../../viewPosts.php"><button class="editCard animated zoomIn fast">View</button></a>
           <a  href="../../index2.php" > <button class="animated zoomIn " onclick="ShowDeletablePostList()" class="deleteCard">Delete / Edit</button></a>
            </div>
        </div>
        </div>

        <div class="butDiv-container">
        <div class="butDiv">
        <a id="album" class="btn" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h1 >My Albums</h1>
                    </a>
            <div id="collapse2" class="collapse">
                <a  href="album.html" >
                    <button  class="animated zoomIn faster editCard">Create</button>
                </a>
            <button  onclick="hideDivs()"  class="animated zoomIn fast editCard">Edit</button>
            <button   class="animated zoomIn  editCard">Delete / Edit</button>
        </div>
    </div>
</div>
<div class="butDiv-container">
    <div  class="butDiv">
            <a class="btn" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h1>My Places</h1>
            </a>
            <div id="collapse3" class="collapse">
                <a href="goodPlans.php"><button class="animated zoomIn faster editCard">Favorites Places</button></a>
        </div>
    </div>
</div>
</div>
<div class="right-side">
<div>
            <iframe id="iframeDelPosts" src="../PHP/postList.php"></iframe>
        </div>
        <form method="POST" action="../PHP/CRUD/createCard2.php">
            <div id="right" class="card-area-right">
                <h2>Preview</h2>
                   <div id="createCard" class="card not-bootstrap">        
            <div class="card-header">
                <button onclick="this.parentElement.parentElement.style.display='none';"   class="remove-post">x</button>
                <div class="profile-image">
                    <img alt="User Icon" draggable="false" ondragstart="return false"  class="icon" src="<?php echo $_SESSION['profileImage']?>"></img>
                </div>
                <div class="profile-info">
                    <div class="name"><h3>  <?php echo $_SESSION['name']?></h3></div>
                    <input name="imgFilterName" id="imgFilterName" type="hidden" value="nothing">       
                    <div class="location"><input name="location" type="text" placeholder="Enter the place"></div>
                </div>
                <div id="date" class="date"></div>
            </div>
            <div class="card-content">
                <input name="file-input" id="file-input" onchange="LoadImg()" type="file" name="name" accept="image/*" style="display: none;" />
                <img  alt="Card Creation Image" id="img" draggable="false"  ondragstart="return false"   onclick="SelectImage()" src="http://www.kensap.org/wp-content/uploads/empty-photo.jpg">
                <div class="imageDescrText"><input onchange="PreviewNewImg()" name="photoPath" id="photoPathInput"></div>
            </div>
            <div class="card-footer">
                <div class="description">
                    <input name="description" type="text" placeholder="Enter the description of the image">
                </div>  
                <div class="comments">
                    <p><span class="username">Comment Area</span>Here will be added your future comments</p>
                </div>
            </div>
            </div>
                   <div style="display:none" id="publish-btn" class="btn-group save-btn-card">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="left-part btn btn-success">Publish</button>
                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu save-btn-drop">
                                      <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">Save As Draft</a>
                                      <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal" href="#">Save As Template</a>
                                      <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal"  href="#">Save In Album</a>
                                    </div>
                   </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span> <!--Close button is represented by &times -->
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        Do you want to save this Post ?
                                        </div>
                                        <div class="modal-footer">
                                            <button  name="save" type="submit" class="btn btn-primary" >Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Dismiss</button>
                                        </div>  
                                    </div>
                                    </div>
                                </div>
                                
                              </div>
                            </form>
            <div id="left" class="card-area-left">
                    <div class="big-indexes">
                        <h2>Creating Your Post</h2>
                      <ol>
                        <li><span>1.</span><p>Fill in the preview card, the image will be automatically changed once you enter an url inside the input box, and then leave it. </p></li>
                        <li><span>2.</span><p>You can apply some filters on the image. Choose none, if you don't want to apply any effect on the image  </p></li>
                        <div id="div-filters" class="filter-btns" >
                        <button onclick="SetImageClass(this.value)" class="saturate" value="0"></button><p>Saturate</p>
                        <button onclick="SetImageClass(this.value)" class="grayscale" value="1"></button><p>Grayscale</p>
                        <button onclick="SetImageClass(this.value)" class="contrast" value="2"></button><p>Contrast</p>
                        <button onclick="SetImageClass(this.value)" class="brightness" value="3"></button><p>Brightness</p>
                        <button onclick="SetImageClass(this.value)" class="blur" value="4"></button><p>Blur</p>
                        <button onclick="SetImageClass(this.value)" class="invert" value="5"></button><p>Invert</p>
                        <button onclick="SetImageClass(this.value)" class="sepia" value="6"></button><p>Sepia</p>
                        <button onclick="SetImageClass(this.value)" class="huerotate" value="7"></button><p>Huerotate</p>
                        <button onclick="SetImageClass(this.value)" class="rss.opacity" value="8"></button><p>Opacity</p>
                        </div>
                        <li><span>3.</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur.  </p></li>
                      </ol> 
                    </div>
                    <div  id="bottom" class="card-create-area">
                                 </div>

        <div id="createCard" class="card not-bootstrap"> 
            <div class="card-header">
                <button onclick="this.parentElement.parentElement.style.display='none';"   class="remove-post">x</button>
                <div class="profile-image">
                    <img alt="François's User Icon" draggable="false"   ondragstart="return false"  class="icon" src="<?php echo $_SESSION['profileImage']?>">
                </div>
                <div class="profile-info">
                    <div class="name"><?php echo $_SESSION["name"]?></div>
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
                    </div>
            </div>
        </div>


    </div>
    <main id="album2" role="main">

            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">Your Albums</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
                <p>
                  <a href="#" class="btn btn-primary my-2">Main call to action</a>
                  <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
              </div>
            </section>
      
            <div  class="album py-5 bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow" style="position:relative">
                            <button type="button" class="top-right-close-btn">X</button>

                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
          </main>
      
         
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" integrity="sha256-ifihHN6L/pNU1ZQikrAb7CnyMBvisKG3SUAab0F3kVU=" crossorigin="anonymous"></script>
      
</div>

            <?php include("Elements/footer.html"); ?>
<script>

// Examine if the image will have distortion
  function examineSize(url){   
    var img = new Image();
    img.addEventListener("load", function(){
        alert( this.naturalWidth +' '+ this.naturalHeight );
        if(img.naturalWidth >= 2 * img.naturalHeight)
        {
          alert("Warning : High level of Image Distortion, choose an image with a better height:width ratio to have more visual fidelity");
        }
    });
    img.src = url;
}

        function PreviewNewImg()
    {
        var img = document.getElementById('img');
        var input = document.getElementById('photoPathInput');
        img.src = input.value;
        SyncButtonsWithImg(img.src);
        examineSize(img.src);
        
    }

// This methods display the big card image on each image filter effect button
    function SyncButtonsWithImg(th)
    {


      try
      {
      var buttonsDiv = document.getElementById('div-filters');
      var buttons = buttonsDiv.childNodes;
      var i;
      var string = "";
      for( i = 0; i < buttons.length;i++)
      {
        if(buttons[i].nodeType == document.ELEMENT_NODE)
        {
          if(buttons[i].tagName == "BUTTON")
          {
        // update image
        buttons[i].style.background = "url("+th+")";
        // center and resize image
        buttons[i].style.backgroundSize="90px";
        string += buttons[i].innerHTML + "\n";
          }
        }
      }

      }
      catch(ex)
      {

        alert("This is not an url for an Image path");
      }

    }

    function SetImageClass(value)
    {
      var img = document.getElementById('img');
      var card = document.getElementById('createCard');

      if(card.style.display!="none")
      {
        
      var className="nothing";
      if(value==0) className = "saturate";
      else if(value==1) className = "grayscale";
      else if (value==2) className = "contrast";
      else if(value==3) className = "brightness";
      else if (value==4) className = "blur";
      else if(value==5) className = "invert";
      else if (value==6) className = "sepia";
      else if(value==7) className = "huerotate";
      else if (value==8) className = "opacity";
      else className=""; // Default className is empty

      // We replace the the default image class by the filter class name
      img.className = className;
      var input = document.getElementById('imgFilterName');
      try
      {
        input.value = className;

      }
      catch(err)
      {
        alert(err.message);
      }
    } 
    else 
    {
      alert("Click on the create button to start editing images first");
    }

    }

    var image = document.getElementById('img');
    image.onerror = function () {
  alert('Error Loading Image, please verify image path or enter an another one');
  this.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpFYiKzm6NnJPx8sbkKnFEu4xY8NrrMRxu5crfOvtG9ITPKA-LcQ'; // place your error.png image instead
};
</script>
	</body>
	
	<!--footer part-->

	</html>
