<?php
	session_start();
//sprawdza czy użytkownik został zalogowany, jeśli nie to zostanie odeślony do logowanie.php
	if(!isset($_SESSION['user']) || $_SESSION['user'] == "")
	{
		header("Location: logowanie.php");
	}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	
	<title>Lew afrykański</title>
	

	
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
			
				<h2>Lew Afrykański</h2>
			
		</div>

</nav>
<main>
<h4>Gatunek mięsożernego ssaka lądowego z podrodziny panter (Pantherinae) w rodzinie kotowatych (Felidae), drugi po tygrysie – co do wielkości – wśród pięciu wielkich kotów. Jedyny kot żyjący w zorganizowanych grupach socjalnych, zaliczany do tzw. wielkiej piątki Afryki – pięciu najbardziej niebezpiecznych zwierząt afrykańskich (słoń, nosorożec, bawół, lew i lampart). Samiec lwa, łatwo rozpoznawalny po grzywie, może ważyć 150–200 kg. Największy znany samiec ważył 375 kg, był to lew o imieniu Simba, żył on do 1970 roku w Colchester Zoo. Samice są znacznie mniejsze, ważą 120–180 kg (największe 185 kg) i nie mają grzywy. Samce zajmują się zdobywaniem i obroną terytorium oraz ochroną stada i zapładnianiem samic. Samice polują i opiekują się lwiątkami. Lwy zamieszkiwały niegdyś Afrykę, Azję i Europę, a jeśli uznać lwy amerykańskie za podgatunek Panthera leo – to również Amerykę Północną i Południową. Współcześnie występują tylko w Afryce, gdzie są narażone na wyginięcie i szczątkowo w Indiach, gdzie ich stan liczebny określony został jako krytyczny. </h4>
</main>

<div id="main2">
<a href="https://www.pexels.com/pl-pl/zdjecie/szczegol-portret-lwa-247502/"><img src="zdjecie/pexels-pixabay-247502.jpg"  alt="obrazek" width="900" ></a>
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
    <th>Rodzina:</th>
    <th>lampart</th> 
  </tr>

  </table>
<div id="menu_zwierzat">
<div id="menu_zwierzat_pozycja">


<ul>
                <li><a href="indexZALOGOWANY.php">Powrót strony</a></li>
                <li><a href="sklep.php">Sklep</a></li>
                <li><a href="#">Lew Afrykański</a></li>
				
				 
				<li><a href="zebra.php">Zebra</a></li>
				
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
