<?php
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $email = $_POST["email"];
    $wiadomosc = $_POST["wiadomosc"];
    $plec = $_POST["plec"];
    $czy_robot = $_POST["czy_robot"];

    echo "Wprowadzone przez Ciebie dane:<br />";
    echo "Imie: $imie <br />";
    echo "Nazwisko: $nazwisko <br />";
    echo "Email: $email <br />";
    echo "Plec: $plec <br />";
    echo "Twoja wiadomosc: $wiadomosc <br />";

    echo "Potwierdziłeś, że nie jesteś robotem!";
//po wypełnienie formularza pokarze nam komunikat co zostało napisane
    
    // $uploaddir = './';
    // echo var_dump($_FILES);
    // $uploadfile = $uploaddir.basename($_FILES['plik']['name']);

    // if (move_uploaded_file($_FILES['plik']['tmp_name'], $uploadfile)) {
    //     echo "File is valid, and was successfully uploaded.\n";
    // } else {
    //     echo "Possible file upload attack!\n";
    // }
?>