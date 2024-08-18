<?php
	session_start();

	unset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<title>Logowanie</title>
	<meta charset="UTF-8">
	<meta name="description" content="Informacje o zwierzętach">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Karol Kołodyński P3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="StyleSheet" type="text/css" href="css/style_logowaniee.css">

	<script src="logowanieJAVASCRIPT.js"></script>
</head>

<body>

<form action="../../skrypty/login_skrypt.php" method="POST">
<div class="tło_prowadzenie" style="text-align: center;">
<?php
		if (isset($_SESSION['error']) && $_SESSION['error'] != "")
		{
			echo "<span style='color: red;'>".$_SESSION['error']."</span>";
			unset($_SESSION['error']);
		}
	?>

<h1>Zaloguj się do konta</h1>

<div class="prowadzenie">
<input type="email" placeholder="Podaj e-mail" id="uzytkownik" name="email">
</div>

<div class="prowadzenie">
<input type="password" placeholder="Podaj hasło" id="haslo" name="haslo">
</div>




<button type="submit" class="logowaniesie">Zaloguj się</button>


<div class="zarejestrowanie">
	<a href="rejestracja.html">Nie masz konta, ZAREJESRTUJ SIĘ</a>
</div>
</div>

</form>
</body>
</html>
