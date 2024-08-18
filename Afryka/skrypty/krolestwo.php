<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "afryka");//łączenie się z bazą 

    $zapytanie = "INSERT INTO krolestwa VALUES(NULL, '".$_POST['nazwa']."')";

    if(!mysqli_query($polaczenie, $zapytanie))//jeśli nie udało dodać to dostajemy komunikat
    {
        $_SESSION['error'] = "Wystąpił błąd podczas dodawania krolestwa";
    }

    header("Location: ../strony/stronypozalogowaniu/zarzadzanie.php");//przekierowuje nam z powrotem do zarządzanie.php
?>