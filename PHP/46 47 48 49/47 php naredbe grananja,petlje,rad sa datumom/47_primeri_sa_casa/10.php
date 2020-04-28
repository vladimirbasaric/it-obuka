<?php

$niz =  array("Danas","je","subota");

// count daje duzinu niza, tj. broj elemenata u nizu
$duzina = count($niz);

//
echo "Reci koje sadrze malo slovo a: "; 
for($i=0;$i<$duzina;$i++)
    // funkcija strchr vraca TRUE/FALSE 
    // ukoliko niska (prvi argument) 
    // sadrzi/ne sadrzi zadati karakter (drugi argument)
    if(strchr($niz[$i],"a"))
        echo $niz[$i], " ";


?>