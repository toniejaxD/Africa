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
	
	<title>Hipopotam</title>
	

	
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
				<h2>Hipopotam</h2>
		</div>

</nav>

<main>
<h4>Gatunek dużego, przeważnie roślinożernego ssaka, należącego do rodziny hipopotamowatych (Hippopotamidae), w obrębie której wyróżnia się dwa współcześnie żyjące gatunki (drugim jest dużo mniejszy hipopotam karłowaty). Hipopotam nilowy jest jedynym żyjącym przedstawicielem rodzaju Hippopotamus. Nazwa gatunku pochodzi z języka starogreckiego i oznacza „koń rzeczny” (ἱπποπόταμος).

Zasiedlają rzeki i jeziora w Afryce na południe od Sahary do 2000 m n.p.m. Hipopotamowate to jedyna rodzina rzędu parzystokopytnych prowadząca ziemnowodny tryb życia. W ciągu dnia najczęściej pozostają w wodzie; aktywne dopiero o zmierzchu i nocą, skubią wtedy trawę na łąkach w pobliżu wody, zjadają także rośliny wodne. W poszukiwaniu pożywienia potrafią zapuszczać się do 8 km w głąb lądu. Przebywają w stadach składających się z dominującego samca i podlegających mu samic w liczbie od 10 do 40 osobników. Samce bronią i przewodzą terytorium obejmujące pewien odcinek rzeki i na nim gromadzą swój harem. Na lądzie hipopotamy są raczej indywidualistami i nie przejawiają instynktu terytorialnego. Rozmnażanie i poród odbywa się w wodzie. Samica po ośmiomiesięcznej ciąży rodzi 1 młode. Młode ssie matkę przez okres 1 roku, również pod wodą.

Pomimo fizycznych podobieństw do świń i innych znanych parzystokopytnych, ich najbliżsi żyjący krewni to walenie – wieloryby, morświny, delfiny itp. </h4>
</main>



<div id="main2">
<a href="https://www.pexels.com/pl-pl/zdjecie/czarny-hipopotam-68663/"><img src="zdjecie/pexels-pixabay-68663.jpg" alt="obrazek" width="900" ></a>
<table style="width: 100%" >
  <tr>
   <th>Typ:</th>
    <th>strunowce</th>
    
  </tr>
   <tr>
    <th>Podtyp:</th>
    <th>kręgowce</th> 
  </tr>
  <tr>
    <th>Gromada:</th>
    <th>ssaki</th> 
  </tr>
  <tr>
    <th>Domena:</th>
    <th>eukarion</th> 
  </tr>

  </table>


<div id="menu_zwierzat">
<div id="menu_zwierzat_pozycja">


<ul>
                <li><a href="indexZALOGOWANY.php">Powrót strony</a></li>
                <li><a href="sklep.php">Sklep</a></li>
                <li><a href="lew.php">Lew Afrykański</a></li>
				
				 
				<li><a href="zebra.php">Zebra</a></li>
			
				<li><a href="#">Hipopotam</a></li>
				
				<li><a href="surakatka.php">Surykatka</a></li>
					
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
