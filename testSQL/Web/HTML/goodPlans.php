<?php include("Elements/header.html"); ?>
<!DOCTYPE html>
<html lang ="en">
    <head>
		<meta charset="utf-8" />
		<!-- The title of the page -->
        <title>Good_Plans</title>
		<!-- The link to the css file -->
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/goodPlans.css">
        <!--link rel="stylesheet" href="../CSS/slider3D.css" -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    </head>

    <body>
	<!-- The Navigation bar -->

        <h1 class="pageTitle">Good Plans</h1>
        <section>
            <body>
                <div>
                    <h2>Places where the photos were taken.</h2>
                    <!--a link to a personal map-->
<<<<<<< HEAD
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IVXETNon4Jn5qMCwfYjHAe7C9-ae7w9x" height=400px width="80%" name="if_maps" ></iframe>
=======
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IVXETNon4Jn5qMCwfYjHAe7C9-ae7w9x"></iframe>
>>>>>>> 7269c7a804024d0ee5207ae3a5fb66d0d513655f
                    <!--iframe src="https://www.google.com/maps/embed" height=400px width="80%" name="if_maps"></iframe-->
                </div>
                <p>
                    <a href="https://www.google.com/maps" target="if_maps">Google Maps</a>
                </p>
                </body>
        </section>
        <section>
            <body>
                <form>
                    Place of the photo:<br>
                    <input type="search" value="Locate on Maps">
                </form>
                <div  id="left-carousel">
                <h1 >Unlocated Posts</h1>
                <section id="slider">
                        <input type="radio" name="slider" id="s1">
                        <input type="radio" name="slider" id="s2">
                        <input type="radio" name="slider" id="s3" checked>
                        <input type="radio" name="slider" id="s4">
                        <input type="radio" name="slider" id="s5">
                        <label for="s1" id="slide1"></label>
                        <label for="s2" id="slide2"></label>
                        <label for="s3" id="slide3"></label>
                        <label for="s4" id="slide4"></label>
                        <label for="s5" id="slide5"></label>
                      </section>
        </div>
                <!--div>
                    <img src="../../Pictures/imagePack/birds.jpg" alt="sample image" >
                </div-->
            </body>
        </section>

<?php include("Elements/footer.html"); ?>

    </body>
    
</html>