<!DOCTYPE html>
<html lang="pl-PL">
<head>	
	<title>Formularz kontaktowy</title>
	<meta charset="UTF-8">
	<meta name="description" content="Informacje o zwierzętach">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Karol Kołodyński P3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="StyleSheet" type="text/css" href="strony/stronypozalogowaniu/css/style_formularz.css">
</head>
<body>


	<form action="skrypty/formularz_skrypt.php" method="POST"><!--Zostanie przekierowany do formularz_skrypt.php-->
		<div class="tlo">
			<h1>Formularz kontaktowy</h1>
			<div class="prowadzenie">
				<input type="text" name="imie" placeholder="Podaj imie" required>		<!--Podanie imienia-->	
			</div>
			<div class="prowadzenie">
				<input type="text" name="nazwisko" placeholder="Podaj nazwisko" required>	<!--Podanie nazwiska-->		
			</div>
			<div class="prowadzenie">
				<input type="text" name="email" placeholder="Podaj e-mail" required><!--Podanie emaila-->
			</div>
			<div class="prowadzenie">
				<textarea name="wiadomosc" rows="4" cols="50"  placeholder="Napisz wiadomość" required ></textarea><!--Podanie napisania wiadomości textboxie-->
			</div>
			<div class="prowadzenie2">
				<input type="radio" name="plec" value="kobieta" required > Kobieta<br /><!--zaznaczenie płci-->
				<input type="radio" name="plec" value="mezczyzna" required > Mężczyzna
			</div>
			<div class="prowadzenie2">
				<input type="checkbox" name="czy_robot" value="tak" required><!--Podanie czy nie jest robotoem-->
				<label>Nie jestem robotem</label>
			</div>
			<div class="prowadzenie">
				<label>Dodatkowy plik:</label><!--Podanie pliku-->
				<input type="file" name="plik">
			</div>
			<input type="submit" class="wyslanieformularza" value="Wyślij wiadomość" >
		</div>
	</form>
</body>
</html>
