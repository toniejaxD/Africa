<?php
    session_start();

    $polaczenie = mysqli_connect("localhost", "root", "", "afryka");

    $zapytanie = "SELECT id FROM krolestwa WHERE nazwa_krolestwa LIKE '".$_POST['krolestwo']."'";//musi zostać pobrane wszytkie pobrane tych królewstw

    $wynik = mysqli_query($polaczenie, $zapytanie);

    if(mysqli_num_rows($wynik) != 1)//jeśli nie ma takiego królewstwa
    {
        $_SESSION['error'] = "Nie ma takiego królestwa!";
        header("Location: ../strony/stronypozalogowaniu/zarzadzanie.php");
    }
    $krolestwo_id = mysqli_fetch_array($wynik)["id"];

    $zapytanie = "SELECT id FROM typy WHERE nazwa_typu LIKE '".$_POST['typ']."'";

    $wynik = mysqli_query($polaczenie, $zapytanie);

    if(mysqli_num_rows($wynik) != 1)//jeśli nie ma takiego królewstwa
    {
        $_SESSION['error'] = "Nie ma takiego typu!";
        header("Location: ../strony/stronypozalogowaniu/zarzadzanie.php");
    }
    $typ_id = mysqli_fetch_array($wynik)["id"];

    $zapytanie = "INSERT INTO zwierzeta VALUES(NULL, '".$_POST['nazwa']."', ".$_POST['waga'].", $krolestwo_id, $typ_id)";//dodawanie danego zwierzęcia na podstawie królewstwo_id i typ_id

    mysqli_query($polaczenie, $zapytanie);

    header("Location: ../strony/stronypozalogowaniu/zarzadzanie.php");
?>