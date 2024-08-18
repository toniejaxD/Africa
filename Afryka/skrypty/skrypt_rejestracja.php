<?php
    session_start();
    $imie = $_POST["imie"]; 
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $haslo = $_POST["haslo"];
//tutaj będzie wczytywać z rejestracji nasze dane
    $polaczenie = mysqli_connect("localhost", "root", "", "afryka");

    $zapytanie = "INSERT INTO uzytkownicy VALUES(NULL, '$imie', '$nazwisko', '$email', '$haslo')";
    if (mysqli_query($polaczenie, $zapytanie))
    {
        $_SESSION['user'] = $imie;
        header("Location: ../strony/stronypozalogowaniu/indexZALOGOWANY.php");
    }
    else
    {
        $_SESSION['error'] = "Niepoprawne dane logowania";
        header("Location: ../index.html");
    }

    

?>