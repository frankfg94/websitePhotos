<?php include("Elements/header.php  "); ?>

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

<!--
  <div class="test">
    <form action="search.php">
      <a href="search.php" class="BUTTON_NHE">search by name</a>
    </form>
  </div>
-->
  
<br>

<div id="filters" class="button-group">
 <button class="button is-checked" data-filter="*">show all</button>
 <button class="button" data-filter=".Yoann">From Yoann</button>
 <button class="button" data-filter=".Francois">From Francois</button>
 <button class="button" data-filter=".Jeremy">From Jérémy</button>
 <button class="button" data-filter="lastYear">last Year</button>
 <button class="button" data-filter="lastMonth">last Month</button>
</div>

<div id="sorts" class="button-group">  <button class="button is-checked" data-sort-by="original-order">original order</button>
  <button class="button" data-sort-by="name">name</button>
  <button class="button" data-sort-by="date">date</button>
  <button class="button" data-sort-by="country">country</button>
 <button class="button" data-sort-by="user">user</button>
 
</div>

<div class="grid">
  <div class="element-item Yoann " data-category="Yoann">
    <h3 class="name">Niagara's Fall</h3>
	<img src="Picture/Niagara.jpg" alt="Niagara" width="280" height="280">
    <p class="date">2018-05-12</p>
    <p class="country">Canada</p>
    <p class="user">Yoann</p>
	
  </div>
  
  <div class="element-item Francois " data-category="Francois">
    <h3 class="name">Big Ben</h3>
	<img src="Picture/Londres.jpg" alt="Londres" width="280" height="280">
    <p class="date">2018-11-21</p>
    <p class="country">England</p>
    <p class="user">Francois</p>
  </div>
  <div class="element-item Yoann " data-category="Yoann">
    <h3 class="name">Eiffel Tower</h3>
	<img src="Picture/Paris.jpg" alt="Paris" width="280" height="280">
    <p class="date">2018-11-27</p>
    <p class="country">France</p>
    <p class="user">Yoann</p>
  </div>
  <div class="element-item Jeremy " data-category="Jeremy">
    <h3 class="name">Statue of Liberty</h3>
	<img src="Picture/New York.jpg" alt="New York" width="280" height="280">
    <p class="date">2017-09-03</p>
    <p class="country">USA</p>
    <p class="user">Jérémy</p>
  </div>
  <div class="element-item Jeremy " data-category="Jeremy">
    <h3 class="name">Château Frontenac</h3>
	<img src="Picture/Quebec City.gif" alt="quebec city" width="280" height="280">
    <p class="date">2010-12-21</p>
    <p class="country">Canada</p>
    <p class="user">Jérémy</p>
  </div>
  <div class="element-item Francois " data-category="Francois">
    <h3 class="name">Science World</h3>
	<img src="Picture/Vancouver.jpg" alt="vancouver" width="280" height="280">
    <p class="date">2012-10-16</p>
    <p class="country">Canada</p>
    <p class="user">Francois</p>
  </div>

  <div class="element-item Francois " data-category="Francois">
    <h3 class="name">Corcovado</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/rio-de-janeiro-bresil/61750954-1-fre-FR/Rio-de-Janeiro-Bresil.jpg"
	alt="Rio de Janeiro" width="280" height="280">
    <p class="date">2014-04-08</p>
    <p class="country">Bresil</p>
    <p class="user">Francois</p>
  </div>

  <div class="element-item Yoann " data-category="Yoann">
    <h3 class="name">Santorin</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/santorin-grece/61751254-1-fre-FR/Santorin-Grece.jpg"
	alt="Paris" width="280" height="280">
    <p class="date">2016-07-17</p>
    <p class="country">Grece</p>
    <p class="user">Yoann</p>
  </div>
  <div class="element-item Jeremy " data-category="Jeremy">
    <h3 class="name">Buenos Aires</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/buenos-aires-amerique-du-sud/61750729-1-fre-FR/Buenos-Aires-Amerique-du-Sud.jpg"
	alt="New York" width="280" height="280">
    <p class="date">2013-05-19</p>
    <p class="country">Argentine</p>
    <p class="user">Jérémy</p>
	</div>
	
	
	  <div class="element-item Francois " data-category="Francois">
    <h3 class="name">PETRA</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/petra-jordanie/61750804-1-fre-FR/Petra-Jordanie.jpg"
	alt="PETRA" width="280" height="280">
    <p class="date">2018-03-24</p>
    <p class="country">JORDANIE</p>
    <p class="user">Francois</p>
  </div>

  <div class="element-item Yoann " data-category="Yoann">
    <h3 class="name">LUANG PRABANG</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/luang-prabang-laos/61751029-1-fre-FR/Luang-Prabang-Laos.jpg"
	alt="LUANG PRABANG" width="280" height="280">
    <p class="date">2014-05-21</p>
    <p class="country">LAOS</p>
    <p class="user">Yoann</p>
  </div>
  <div class="element-item Jeremy " data-category="Jeremy">
    <h3 class="name">CHIANG MAI</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/chiang-mai-thailande/61751329-1-fre-FR/Chiang-mai-Thailande.jpg"
	alt="New York" width="280" height="280">
    <p class="date">2018-08-27</p>
    <p class="country">THAILANDE</p>
    <p class="user">Jérémy</p>
	</div>
	
	
	
		  <div class="element-item Francois " data-category="Francois">
    <h3 class="name">VARANASI</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/varanasi-inde/61751179-1-fre-FR/Varanasi-Inde.jpg"
	alt="VARANASI" width="280" height="280">
    <p class="date">2014-10-24</p>
    <p class="country">INDE</p>
    <p class="user">Francois</p>
  </div>

  <div class="element-item Yoann " data-category="Yoann">
    <h3 class="name">LHASSA</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/lhassa-tibet/61751479-1-fre-FR/Lhassa-Tibet.jpg"
	alt="LHASSA" width="280" height="280">
    <p class="date">2011-04-24</p>
    <p class="country">TIBET</p>
    <p class="user">Yoann</p>
  </div>
  <div class="element-item Jeremy " data-category="Jeremy">
    <h3 class="name">NOUVELLE-ORLÉANS</h3>
	<img src="https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/evasion/les-25-plus-belles-villes-du-monde-qui-nous-font-rever/nouvelle-orleans-etats-unis/61751554-1-fre-FR/Nouvelle-Orleans-Etats-Unis.jpg"
	alt="NOUVELLE-ORLÉANS" width="280" height="280">
    <p class="date">2018-03-14</p>
    <p class="country">USA</p>
    <p class="user">Jérémy</p>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>

  

    <script  src="../JS/iso.js"></script>



	<?php include("Elements/footer.html"); ?>
</body>

</html>
