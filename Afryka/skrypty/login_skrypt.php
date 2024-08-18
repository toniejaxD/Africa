<?php
    session_start();//zaczynanie sesji

    $email = $_POST["email"];//będzie pobierać email oraz hasło
    $haslo = $_POST["haslo"];

    $polaczenie = mysqli_connect("localhost", "root", "", "afryka");

    $zapytanie = "SELECT * FROM uzytkownicy WHERE email LIKE '$email' AND haslo LIKE '$haslo'";//wybieramy z bazy
    $wynik = mysqli_query($polaczenie, $zapytanie);

    if (mysqli_num_rows($wynik) > 0)//jeśli znalazło się użytkownik
    {
        $row = mysqli_fetch_array($wynik);
        $_SESSION['user'] = $row['imie'];//wsadza tej zmiennej sesyjnej usera w imie

        header("Location: ../strony/stronypozalogowaniu/indexZalogowany.php");
    }
    else//a jeśli nie to pokazuje nam komunikat o błędne zalogowaniu
    {
        $_SESSION['error'] = "Niepoprawne dane logowania";
        header("Location: ../strony/stronypozalogowaniu/logowanie.php");
    }
?>