<?php

$niz =  array("Danas","je","subota");

// count daje duzinu niza, tj. broj elemenata u nizu
$duzina = count($niz);

// promenljiva u kojoj cuvamo do sada pronadjenu najduzu rec
// pretpostavicemo da je to prva rec iz niza
$max_rec = $niz[0];

// promenljiva u kojoj cuvamo duzinu do sada pronadjene najduze reci
// strlen daje duzinu niske
$max_duzina = strlen($niz[0]);

// krecemo od indeksa 1, jer je rec sa pozicije 0 u max_rec promenljivoj
// pa nema potrebe da je uporedjujemo 
for($i=1;$i<$duzina;$i++)
    // ako je sledeca rec duza, azuriramo promenljive
    if(strlen($niz[$i])>$max_duzina){
        $max_rec = $niz[$i];
        $max_duzina = strlen($niz[$i]);
    }

echo "Najduza rec u nizu je: $max_rec.";


?>