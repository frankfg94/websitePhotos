<?php include("Elements/header.html"); ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Isotope - filtering & sorting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="../CSS/iso.css">

  
</head>

<body>



<br>
<br>
<br>
<br>
<br>

  <div class="test">
    <form action="iso.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

<br>

<div id="sorts" class="button-group">  <button class="button is-checked" data-sort-by="original-order">original order</button>
  <button class="button" data-sort-by="name">name</button>
  <button class="button" data-sort-by="date">date</button>
  <button class="button" data-sort-by="country">country</button>
  <button class="button" data-sort-by="category">category</button>
 <button class="button" data-sort-by="user">user</button>
 
</div>

<div class="grid">
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Niagara's Fall</h3>
	<img src="Picture/Niagara.jpg" alt="Niagara" width="280" height="280">
    <p class="date">2018-05-12</p>
    <p class="country">Canada</p>
    <p class="user">Yoann</p>
	
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Big Ben</h3>
	<img src="Picture/Londres.jpg" alt="Londres" width="280" height="280">
    <p class="date">2015-05-21</p>
    <p class="country">England</p>
    <p class="user">François</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Eiffel Tower</h3>
	<img src="Picture/Paris.jpg" alt="Paris" width="280" height="280">
    <p class="date">2016-04-27</p>
    <p class="country">France</p>
    <p class="user">Yoann</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Statue of Liberty</h3>
	<img src="Picture/New York.jpg" alt="New York" width="280" height="280">
    <p class="date">2017-09-03</p>
    <p class="country">USA</p>
    <p class="user">Jérémy</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Château Frontenac</h3>
	<img src="Picture/Quebec City.gif" alt="quebec city" width="280" height="280">
    <p class="date">2010-12-21</p>
    <p class="country">Canada</p>
    <p class="user">Jérémy</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Science World</h3>
	<img src="Picture/Vancouver.jpg" alt="vancouver" width="280" height="280">
    <p class="date">2012-10-16</p>
    <p class="country">Canada</p>
    <p class="user">François</p>
  </div>

  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>

  

    <script  src="../JS/iso.js"></script>



	<?php include("Elements/footer.html"); ?>
</body>

</html>
