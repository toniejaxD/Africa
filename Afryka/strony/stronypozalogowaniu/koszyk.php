<?php
    include('../../klasy/Koszyk.php');
	session_start();
    
	if(!isset($_SESSION['user']) || $_SESSION['user'] == "")
	{
		header("Location: logowanie.php");
	}
?>

<!DOCTYPE html>
	<html lang="pl-PL">
		<head>
			<title>Zwierzęta afrykańskie</title>
			<meta charset="UTF-8">
			<meta name="description" content="Informacje o zwierzętach">
			<meta name="keywords" content="HTML, CSS, JavaScript">
			<meta name="author" content="Karol Kołodyński P3">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="StyleSheet" type="text/css" href="css/style.css">
		</head>
	<body>
		<nav>
			<div id="menu_zalogowanie">
				<div id="menu_list_pozycja">
					<a href="logowanie.php">Wyloguj się</a>
				</div>
			</div>
		</nav>
		<div id="main2">
			<div style="text-align: center; margin-top: 3rem;">
                <div style="width: 30%;margin: auto;">
                    <?php
                        if(!isset($_SESSION['koszyk']))
                        {
                            echo "Koszyk jest pusty";
                        }
                        else if(isset($_GET['usun']))
                        {
                            $koszyk = $_SESSION['koszyk'];
                            $koszyk->usun_zawartosc();
                            echo "Koszyk jest pusty";  
                        }
                        else
                        {
                            $koszyk = $_SESSION['koszyk'];
                            $koszyk->pokaz_koszyk();
                            echo "<a href='?usun=1'>Usuń zawartość koszyka</a>";
                        }
                    ?>
                </div>
			</div>
			<div id="menu_zwierzat">
				<div id="menu_zwierzat_pozycja">
					<ul>
						<li><a href="zarzadzanie.php">Zarzadzanie danymi</a></li>
						<li><a href="sklep.php">Sklep</a></li>
					
						<li><a href="lew.php">Lew afrykański</a></li>
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
