<?php

class Koszyk {
    public $wartosc = 0;/*wartość czyli cena*/
    public $zawartosc = array();/*zawartość koszyka, array-tablica*/
   
    function dodaj_do_koszyka($element) 
    {
        array_push($this->zawartosc, $element);
        $this->wartosc += ($element->wartosc);
    }

    function pokaz_koszyk() /*pokaż koszyka który wypisuje formie tabeli */
    {
        echo "<table border='1' width='100%'>";

        for($x = 0; $x < count($this->zawartosc); $x++)
        {
            echo "<tr>";
            echo "<td>".$this->zawartosc[$x]->nazwa."</td><td>".$this->zawartosc[$x]->wartosc."zł</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<b>Całkowita suma wynosi: ".$this->wartosc."zł</b><br />";
        echo "<div style='padding-bottom: 3rem;'></div>";
    }

    function usun_zawartosc()/*będzie usuwać przedmioty z koszyka*/
    {
        $this->zawartosc = array();
        $this->wartosc = 0;
    }
}

class Zwierze {
    public $wartosc = 0;/*wartość czyli cena*/
    public $nazwa = "";/*nazwa zwierzęcia*/
   
    function __construct($nazw, $wart) {/*konstruktor przyjmuje wartości*/
        $this->nazwa = $nazw;
        $this->wartosc = (int)$wart;
    }
}

?>