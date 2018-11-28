<?php include("Elements/header.html"); ?>
<!doctype html>
<html class="export" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Filter &amp; sort magical layouts">
    <title>Isotope &#xB7; Sorting</title>
    <!-- Isotope does not require any CSS files -->

    <link rel="stylesheet" href="../CSS/isotope-docs.css?" media="screen">

</head>
<body class="page--sorting">


    <div id="content" class="main">
        <div class="container">
            

	  <div class="search-container">
    <form action="sorting.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>




			
            <div class="big-demo go-wide" data-js="sorting-demo">
			<navbar>
                <div class="button-group sort-by-button-group js-radio-button-group">
                    <button class="button is-checked" data-sort-by="original-order">original order</button>
                    <button class="button" data-sort-by="name">name</button>
                    <button class="button" data-sort-by="symbol">symbol</button>
                    <button class="button" data-sort-by="number">date</button>
                    <button class="button" data-sort-by="user">user</button>
                    <button class="button" data-sort-by="category">category</button>
                </div>
			</navbar>

                <div class="grid">
                    <div class="element-item transition metal " data-category="transition" width="300" height="300">
                        <h5 class="name">Montreal</h5>
                        <p class="symbol">Montreal</p>
                        <p class="number">2018-07-22</p>
						<img src="Picture/Montreal.jpg" alt="Montreal" width="280" height="280">
						<p class="user"> yoann </p>
                    </div>
                    <div class="element-item metalloid " data-category="metalloid">
                        <h5 class="name">Niagara</h5>
                        <p class="symbol">Niagara</p>
                        <p class="number">2018-01-22</p>
						<img src="Picture/Niagara.jpg" alt="Niagara" width="280" height="280">
                    </div>
                    <div class="element-item post-transition metal " data-category="post-transition">
                        <h5 class="name">Quebec City</h5>
                        <p class="symbol">Quebec City</p>
                        <p class="number">2010-07-12</p>
						<img src="Picture/quebeccity.gif" alt="quebeccity" width="280" height="280">
                    </div>
                    <div class="element-item post-transition metal " data-category="post-transition">
                        <h5 class="name">Vancouver</h5>
                        <p class="symbol">Vancouver</p>
                        <p class="number">2016-07-26</p>
						<img src="Picture/Vancouver.jpg" alt="vancouver" width="280" height="280">
                    </div>
                   
                </div>
            </div>

            <!-- Looking for isotope.js? Use isotope.pkgd.min.js -->
            <!-- Isotope does NOT require jQuery. But it does make things easier -->
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
			        <script>window.jQuery || document.write('<script src="../JS/jquery.min.js"><\/script>')</script>
            <script src="../JS/isotope-docs.min.js?6"></script>
		
            <?php include("Elements/footer.html"); ?>
</body>
</html>
