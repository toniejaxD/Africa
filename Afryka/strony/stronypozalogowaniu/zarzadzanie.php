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
			<div class="komunikat">
				<?php
					if(isset($_SESSION['error']))
					{
						echo "<span style='color: red;'>".$_SESSION['error']."</span";
						unset($_SESSION['error']);//po odświerzeniu strony zniknie z komunikatu o błędzie
					}
				?>
			</div>
			<div class="main-table-div">
				<h1>Zwierzeta</h1>
				<table class="main-table">
					<tr>
						<th>Nazwa</th>
						<th>Waga</th>
						<th>Królestwo</th>
						<th>Typ</th>
						<th></th>
					</tr>
					<?php
						$polaczenie = mysqli_connect("localhost", "root", "", "afryka");//łączenie się z bazą

						if(isset($_GET['id_zwierze']))
						{
							$zapytanie = "DELETE FROM zwierzeta WHERE id=".$_GET['id_zwierze'];
							mysqli_query($polaczenie, $zapytanie);
						}

						if(isset($_GET['id_krolestwo']))
						{
							$zapytanie = "DELETE FROM krolestwa WHERE id=".$_GET['id_krolestwo'];
							mysqli_query($polaczenie, $zapytanie);
						}

						if(isset($_GET['id_typ']))
						{
							$zapytanie = "DELETE FROM typy WHERE id=".$_GET['id_typ'];
							mysqli_query($polaczenie, $zapytanie);
						}

						$zapytanie = "SELECT zwierzeta.id, zwierzeta.nazwa, zwierzeta.waga, krolestwa.nazwa_krolestwa, typy.nazwa_typu FROM zwierzeta INNER JOIN krolestwa ON zwierzeta.id_krolestwa=krolestwa.id INNER JOIN typy ON zwierzeta.id_typu=typy.id ORDER BY id";//zapytanie który łączy z bazą

						$wynik = mysqli_query($polaczenie, $zapytanie);//wykonuje nam zapytanie

						if (mysqli_num_rows($wynik))//jeśli zwróciło nam wynik
						{
							while($wiersz = mysqli_fetch_assoc($wynik))//pobiera każdy wierz z tablicy asocjacyjnej
							{
								echo "<tr>";
									echo "<td>".$wiersz["nazwa"]."</td><td>".$wiersz["waga"]."</td><td>".$wiersz["nazwa_krolestwa"]."</td><td>".$wiersz["nazwa_typu"]."</td><td><a href='?id_zwierze=".$wiersz['id']."'>X</a></td>";//wypisanie danych
								echo "</tr>";
							}
						}
					?>
				</table>
				<form action="../../skrypty/zwierze.php" method="POST"><!--formularz który będzie nam dodawał-->
					<table>
						<tr>
							<td>Nazwa:</td> <td><input type="text" name="nazwa" /></td>
						</tr>
						<tr>
							<td>Waga:</td> <td><input type="text" name="waga" /></td>
						</tr>
						<tr>
							<td>Królestwo:</td> <td><input type="text" name="krolestwo" /></td>
						</tr>
						<tr>
							<td>Typ:</td> <td><input type="text" name="typ" /></td>
						</tr>
					</table>
					<button type="submit">Dodaj</button><!--po dodaniu będzie nam przesłał do zwierze.php-->
				</form>
			</div>

			<div class="main-table-div">
				<h1>Królestwa</h1>
				<table class="main-table">
					<tr>
						<th>ID</th>
						<th>Nazwa</th>
						<th></th>
					</tr>
					<?php
						$zapytanie = "SELECT * FROM krolestwa ORDER BY id";

						$wynik = mysqli_query($polaczenie, $zapytanie);

						if (mysqli_num_rows($wynik))
						{
							while($wiersz = mysqli_fetch_assoc($wynik))
							{
								echo "<tr>";
									echo "<td>".$wiersz["id"]."</td><td>".$wiersz["nazwa_krolestwa"]."</td><td><a href='?id_krolestwo=".$wiersz['id']."'>X</a></td>";
								echo "</tr>";
							}
						}
					?>
				</table>
				<form action="../../skrypty/krolestwo.php" method="POST">
					Nazwa: <input type="text" name="nazwa" /><br />
					<button type="submit">Dodaj</button>
				</form>
			</div>

			<div class="main-table-div">
				<h1>Typy</h1>
				<table class="main-table">
					<tr>
						<th>ID</th>
						<th>Nazwa</th>
						<th></th>
					</tr>
					<?php
						$zapytanie = "SELECT * FROM typy ORDER BY id";

						$wynik = mysqli_query($polaczenie, $zapytanie);

						if (mysqli_num_rows($wynik))
						{
							while($wiersz = mysqli_fetch_assoc($wynik))
							{
								echo "<tr>";
									echo "<td>".$wiersz["id"]."</td><td>".$wiersz["nazwa_typu"]."</td><td><a href='?id_typ=".$wiersz['id']."'>X</a></td>";
								echo "</tr>";
							}
						}
					?>
				</table>
				<form action="../../skrypty/typ.php" method="POST">
					Nazwa: <input type="text" name="nazwa" /><br />
					<button type="submit">Dodaj</button>
				</form>
			</div>
			<div id="menu_zwierzat">
				<div id="menu_zwierzat_pozycja">
					<ul>
						<li><a href="indexZALOGOWANY.php">Powrót do strony</a></li>
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
