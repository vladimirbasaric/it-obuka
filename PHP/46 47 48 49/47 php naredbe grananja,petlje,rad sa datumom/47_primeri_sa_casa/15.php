<?php

$asocijativni_niz  = array("Ime" => "Anica", "Prezime" => "Mitic","Godine" => 23 );
// testirati i za slucaj kada ne postoji trazeni kljuc
// $asocijativni_niz  = array("Ime" => "Anica", "Prezime" => "Mitic");

// var_dump funkcija 
// daje tip i vrednost prosledjenog podatka
echo "Niz pre izmene: ", var_dump($asocijativni_niz), "<br>";

// indikator da li je pronadjen kljuc "Godine"
$pronadjen = FALSE;

foreach($asocijativni_niz as $kljuc => $vrednost)
    // strcmp poredi dve niske leksikografski 
    // vraca negativan broj ako je prva manja
    // pozitivan broj ako je prva niska veca
    // ili 0 ukoliko su jednake niske 
    if(strcmp($kljuc, "Godine")==0){
        $asocijativni_niz[$kljuc] += 1;
        $pronadjen = TRUE;
        // ako smo ga pronasli, nema potrebe dalje da pretrazujemo niz
        // jer je kljuc jedinstven 
        break;
    }

if(!$pronadjen)
    $asocijativni_niz["Godine"] = 22;  

echo "Niz posle izmene: ", var_dump($asocijativni_niz), "<br>";

?>