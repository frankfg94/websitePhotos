<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

  <link rel="stylesheet" href="../CSS/homeStyle.css">
  <link rel="stylesheet" href="../CSS/slider3D.css" >

</head>
<body>
        <?php include("Elements/header.html"); ?>
        <div id="home-main-div">
            <div  id="left-carousel">
            <h1 >Recent Posts</h1>
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
              <div id="right-mosaic">
                  <h1 >Popular Posts</h1>
                  <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 0 }'>
                        <div class="grid-sizer"></div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
                        </div>
                        <div class="grid-item">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
                        </div>
                    </div>
              </div>
        </div>
      
              <?php include("Elements/footer.html"); ?>
</body>
</html>
