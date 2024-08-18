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
	
	<title>Surykatka</title>
	

	
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
				<h2>Surykatka</h2>
		</div>

</nav>


<main>
<h4>Jest to niewielki drapieżnik o długości ciała 25-35 cm, długości ogona ok. 20 cm i wadze 600-900 g. Jego sylwetka jest smukła, pysk wydłużony i spiczasty, uszy niewielkie, zaokrąglone. Kończyny są raczej krótkie, palce zakończone długimi, ostrymi pazurami. Wierzch ciała jest pokryty miękkim, obfitym futrem o barwie szarej z brązowymi paskami. Spód ciała skąpo owłosiony. Pysk i policzki są jasne, wokół oczu widać ciemne obwódki. Żółty ogon zakończony jest czarnym czubkiem. Surykatka zamieszkuje Afrykę Południową, Angolę, Namibię, południe Botswany.  Gatunek ten prowadzi dzienny tryb życia, lubi gromadnie wygrzewać się w słońcu.
 Wykazuje silne więzi społeczne, żyje na ogół w koloniach, liczących minimum 10 osobników. Często przebywa w towarzystwie innych gatunków -mangust lub nawet gryzoni. W grupie surykatek występuje tak silna współzależność, że pojedyncze osobniki właściwie nie mają szansy przeżycia. 
</h4>
</main>


<div id="main2">
<a href="https://www.pexels.com/pl-pl/zdjecie/pustynia-zwierze-afryka-surykatka-11025911/"><img src="zdjecie/pexels-mandy-mc-donald-11025911.jpg" alt="obrazek" width="600"></a>
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
    <th>drapieżne</th> 
  </tr>
  <tr>
    <th>Typ:</th>
    <th>strunowce</th> 
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
					
				<li><a href="#">Surakatka</a></li>
				
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
