<?php

$niz =  array(1,2,3,4,5,6,7,8,9,10);

// count daje duzinu niza, tj. broj elemenata u nizu
$duzina = count($niz);

// elementima niza pristupamo preko indeksa 
// koriscenjem operatora []
// indeksi, tj. pozicije se broje od 0 do duzina - 1
for($i=0;$i<$duzina;$i++)
    echo $niz[$i], " ";

echo "<br>";

/* kroz niz se moze proci koriscenjem kolekcijskog for-a, tj. foreach naredbe
   foreach ima sledecu sintaksu:
    
   foreach($ime_niza as $el_niza){
       blok naredbi 
   }

   $ime_niza je promenljiva koja sadrzi niz
   $el_niza je promenljiva koja u svakoj iteraciji petlje
   uzima vrednost sledeceg elementa niza 
*/

foreach ($niz as $element) {
    echo $element, " ";
}

?>