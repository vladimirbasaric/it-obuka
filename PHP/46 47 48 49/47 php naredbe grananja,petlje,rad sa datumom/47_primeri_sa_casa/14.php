<?php
/*

Asocijativni nizovi za elemente imaju parove oblika:
    kljuc => vrednost koja je pridruzena kljucu. 

Pristup vrednosti je moguc preko kljuca koji se koristi u ulozi indeksa
ili direktnim razdvajanjem elementa niz na kljuc i vrednost.
*/
$asocijativni_niz  = array("Ime" => "Anica", "Prezime" => "Mitic", "Godine" => 23 );

foreach($asocijativni_niz as $kljuc => $vrednost)
    echo "(".$kljuc.", ".$vrednost.") <br>";


?>