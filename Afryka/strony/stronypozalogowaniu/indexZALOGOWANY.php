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
			<div class="main-table-select">
				<form action="" method="POST">
					Królestwo:
					<select name="krolestwo">
						<option value="">wybierz</option>
						<option value="ssak">Ssaki</option>
						<option value="gad">Gady</option>
						<option value="plaz">Płazy</option>
						<option value="ptak">Ptak</option>
						<option value="ryba">Ryba</option>
						<option value="bezkregowiec">Bezkręgowiec</option>
					</select>

					Typ:
					<select name="typ">
						<option value="">wybierz</option>
						<option value="roslinozerca">Roślinożercy</option>
						<option value="miesozerca">Mięsożerecy</option>
						<option value="padlinozerca">Padlinożercy</option>
					</select>

					<button type="submit" name="submit" value="Filtruj">Filtruj</button>
				</form>
				<hr />
				<table class="main-table">
					<tr>
						<th>Nazwa</th>
						<th>Waga</th>
						<th>Królestwo</th>
						<th>Typ</th>
					</tr>
					<?php
						$polaczenie = mysqli_connect("localhost", "root", "", "afryka");//tutaj będzie filtrowana tych zwierząt

						$zapytanie = "";
						if(isset($_POST["submit"]))
						{
							if ($_POST["krolestwo"] != "" && $_POST["typ"] != "")
							{
								$zapytanie = "SELECT zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id WHERE krolestwa.nazwa_krolestwa='".$_POST['krolestwo']."' AND typy.nazwa_typu='".$_POST['typ']."'";
							}
							else if($_POST["krolestwo"] == "" && $_POST["typ"] != "")
							{
								$zapytanie = "SELECT zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id WHERE typy.nazwa_typu='".$_POST['typ']."'";
							}
							else if($_POST["krolestwo"] != "" && $_POST["typ"] == "")
							{
								$zapytanie = "SELECT zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id WHERE krolestwa.nazwa_krolestwa='".$_POST['krolestwo']."'";
							}
							else
							{
								$zapytanie = "SELECT zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id";
							}
						}
						else
						{
							$zapytanie = "SELECT zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id";
						}

						$wynik = mysqli_query($polaczenie, $zapytanie);

						if (mysqli_num_rows($wynik) > 0)
						{
							while($wiersz = mysqli_fetch_assoc($wynik))
							{
								echo "<tr>";
									echo "<td>".$wiersz["nazwa"]."</td><td>".$wiersz["waga"]."</td><td>".$wiersz["nazwa_krolestwa"]."</td><td>".$wiersz["nazwa_typu"]."</td>";
								echo "</tr>";
							}
						}
					?>
				</table>
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
