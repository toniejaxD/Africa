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
	
	<title>Słoń afrykański</title>
	

	
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
				<h2>Słoń afrykański</h2>
		</div>

</nav>

<main>
<h4>Samce podgatunku sawannowego osiągają wys. 3,5, a nawet 4 m przy wadze 7,5-8 ton. Od słonia indyjskiego słoń afrykański różni się znacznie większymi uszami i kształtem głowy, na której szczycie brak 2 wielkich wypukłości, charakterystycznych dla tamtego. Ponadto ma dłuższe nogi, stąd jest od niego wyższy, oraz ma nie 1, lecz 2 wyrostki kończące trąbę - organ powstały ze zrośnięcia nozdrzy i górnej wargi, będący najwszechstronniejszym narządem w świecie zwierząt. Służy nie tylko do podawania pokarmów i węszenia, lecz także obmacywania przedmiotów, wydawania głosu, urządzania kąpieli oraz pieszczot - zarówno w nadzwyczaj subtelnej grze miłosnej podczas zalotów, jak i wzmacniającym więź pomiędzy członkami stada.Tzw. kły, a w rzeczywistości silnie rozrośnięte siekacze miewają do 3,44 m dł. i ważą ponad 100 kg. W każdej szczęce następuje 6-krotna wymiana zębów, które wypychane są od tyłu, nie zaś od dołu. Słoń afrykański zasiedlał kiedyś całą Afrykę. Rzymianie sprowadzali go do swych cyrków z gór Atlasu. Dziś żyje od 12 stopnia szer. geogr. północnej do 20 stopnia szer. południowej w liczbie ok. 20 0000 osobników. Licznie występuje w Sudanie, we wschodniej Afryce i w Kongo. Spotkać go można jeszcze w Rodezji, a niemal całkowicie został wyniszczony w RPA. W górach może dochodzić do 2000 m n.p.m.</h4>
</main>

<div id="main2">

<a href="https://www.pexels.com/pl-pl/zdjecie/dwa-szare-slonie-obok-skaly-584186/"><img src="zdjecie/pexels-nilina-584186.jpg"  alt="obrazek" width="900" ></a>
<table style="width:100%">
  <tr>
    <th>Gromada:</th>
    <th>ssaki</th> 
  </tr>
   <tr>
    <th>Podtyp:</th>
    <th>kręgowce</th> 
  </tr>
  <tr>
    <th>Rząd:</th>
    <th>trąbowce</th> 
  </tr>
  <tr>
    <th>Rodzina:</th>
    <th>loxodonta</th> 
  </tr>

  </table>

<div id="menu_zwierzat">
<div id="menu_zwierzat_pozycja">


<ul>
                <li><a href="indexZALOGOWANY.php">Powrót strony</a></li>
                <li><a href="sklep.php">Sklep</a></li>
                <li><a href="lew.php">Lew Afrykański</a></li>
				
				 
				<li><a href="zebra.php">Zebra</a></li>
			
				<li><a href="hipopota.php">Hipopotam</a></li>
					
				<li><a href="surakatka.php">Surykatka</a></li>
				
				<li><a href="#">Słoń afrykański</a></li>
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
