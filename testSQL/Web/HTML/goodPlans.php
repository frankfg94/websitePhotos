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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    </head>

    <body>
	<!-- The Navigation bar -->

        <h1 class="pageTitle">Good Plans</h1>
        <section>
            <body>
                <div>
                    <h2>Places where the photos were taken.</h2>
                    <iframe src="https://www.google.com/maps/embed" height=400px width="80%" name="if_maps"></iframe>
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
                    <input type="search" value="Search on Maps">
                </form>
                <div>
                    <img src="../../Pictures/imagePack/birds.jpg" alt="sample image" >
                </div>
            </body>
        </section>

<?php include("Elements/footer.html"); ?>

    </body>
    
</html>
