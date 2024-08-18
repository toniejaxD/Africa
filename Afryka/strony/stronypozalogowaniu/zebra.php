<?php
	session_start();

	if(!isset($_SESSION['user']) || $_SESSION['user'] == "")
	{
		header("Location: logowanie.php");
	}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	
	<title>Zebra</title>
	

	
	<meta charset="UTF-8">
	<meta name="description" content="Informacje o zwierzętach">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Karol Kołodyński P3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="StyleSheet" type="text/css" href="css/style_zwierzat.css">
	
	

</head>


<body>


<nav>
<div id="tytul">
				<h2>Zebra</h2>
		</div>

</nav>
<main>
<h4>Do najbardziej charakterystycznych mieszkańców sawann i stepów Afryki należy zebra. Jest ssakiem kopytnym z rodziny koniowatych o bardzo oryginalnym ubarwieniu sierści w czarno-białe pasy, których kształt zależy od gatunku zebry, a widoczna na ekranie należy do zebr równikowych. Ten wzór sprzyja zmyleniu drapieżników, które w pogoni za stadem mają kłopoty by wyodrębnić z niego pojedynczego osobnika. W razie niebezpieczeństwa zebry ratują się błyskawiczną ucieczką z szybkością dochodzącą nawet do 60 km/h. Żyją stosunkowo długo — około 30 lat. Zebra ma dużą głowę, przypominającą końską, osadzoną na muskularnej szyi, krępy tułów i stosunkowo krótkie nogi, a jej ogon z kitką włosów na końcu przypomina ogon osła.
Początkowo zebry były bardzo rozpowszechnione na wszystkich sawannach i stepach Afryki położonych na południe od Sahary, ale obszar ich występowania obecnie skurczył się, gdyż były silne tępione.
Wszystkie zebry żyją w stadach złożonych z kilku klaczy z młodymi oraz jednego dojrzałego samca przewodnika. Niekiedy tworzą stada z innymi zwierzętami sawanny — żyrafami, czy antylopami, zwłaszcza w okresie wędrówki na obfitsze pastwiska, a w jedzeniu nie są wybredne i zjadają niemal wszystko co rośnie.</h4>
</main>



<div id="main2">

<a href="https://www.pexels.com/pl-pl/zdjecie/selektywna-ostrosc-fotografii-zebry-750539/"><img src="zdjecie/pexels-adriaan-greyling-750539.jpg"  alt="obrazek" width="700" ></a>
<table style="width:100%">
  <tr>
   <th>Typ:</th>
    <th>strunowce</th> 
    
  </tr>
   <tr>
    <th>Podtyp:</th>
    <th>kręgowce</th> 
  </tr>
  <tr>
    <th>Rodzaj:</th>
    <th>koń</th> 
  </tr>
  <tr>
    <th>Gromada:</th>
    <th>ssaki</th>
  </tr>

  </table>


<div id="menu_zwierzat">
<div id="menu_zwierzat_pozycja">


<ul>
               <li> <a href="indexZALOGOWANY.php">Powrót strony</a></li>
               <li><a href="sklep.php">Sklep</a></li>
               <li> <a href="lew.php">Lew Afrykański</a></li>
				
				 
				<li><a href="#">Zebra</a></li>
				
				<li><a href="hipopota.php">Hipopotam</a></li>
				
				<li><a href="surakatka.php">Surakatka</a></li>
				
				<li><a href="slon.php">Słoń afrykański</a></li>
				<li><a href="zyrafa.php">Żyrafa</a></li>
			
			</ul>


</div>
</div>


<footer>

<h6>Autor: Karol Kołodyński</h6>
</footer>
</div>
</body>
</html>
