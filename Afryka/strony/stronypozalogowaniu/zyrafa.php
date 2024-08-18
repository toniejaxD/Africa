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
	
	<title>Żyrafa</title>
	

	
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
				<h2>Żyrafa</h2>
		</div>

</nav>


<main>
<h5>Afrykański ssak parzystokopytny z rodziny żyrafowatych, najwyższe zwierzę lądowe i największy z przeżuwaczy żyjących w czasach nowożytnych. Jego epitet gatunkowy odnosi się do przypominającego wielbłąda wyglądu i łat na futrze, właściwych lampartowi (leopardowi, Panthera pardus). Gatunek ten wyróżnia się bardzo długą szyją, osiąga 5–6 m wysokości i masę (średnio) 1200 kg w przypadku samców i 830 kg w przypadku samic. Jego najbliższym żyjącym krewnym jest okapi leśne (rodzina Giraffidae liczy na początku XXI w. tylko te dwa gatunki). Bazując na wzorze ubarwienia wyróżnia się 9 podgatunków, natomiast badania genetyczne sugerują podział gatunku na cztery odrębne gatunki.
Żyrafy występują od Czadu na północy do RPA na południu, oraz od Nigru na zachodzie do Somalii na wschodzie. Zasięg występowania żyrafy jest nieciągły, a niektóre populacje izolowane od siebie. Zwierzę zasiedla zazwyczaj sawanny, tereny trawiaste i otwarte lesiste. Główne źródło pożywienia żyrafy to liście akacji, rosnące na wysokości niedostępnej dla większości roślinożerców. Na żyrafy polują lwy. Młode padają też ofiarami lampartów, hien cętkowanych i likaonów. Osobniki dorosłe nie tworzą silnych więzi społecznych, choć gromadzą się w luźnych grupkach, gdy przemieszczają się w tym samym kierunku.</h5>

</main>

<div id="main2">
<a href="https://www.pexels.com/pl-pl/zdjecie/krajobraz-natura-sloneczny-lato-4577789/"><img src="zdjecie/pexels-rachel-claire-4577789.jpg"   alt="obrazek" width="500" ></a>
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
    <th>żyrafa</th> 
  </tr>
  <tr>
    <th>Gromada:</th>
    <th>ssaki</th>
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
				
				<li><a href="slon.php">Słoń afrykański</a></li>
				<li><a href="#">Żyrafa</a></li>
			
			</ul>


</div>
</div>


<footer>

<h6>Autor: Karol Kołodyński</h6>
</footer>
</div>
</body>
</html>
