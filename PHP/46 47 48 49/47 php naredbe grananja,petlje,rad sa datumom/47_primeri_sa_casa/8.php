<?php

$niz =  array(1,2,3,4,5,6,7,8,9,10);

// count daje duzinu niza, tj. broj elemenata u nizu
$duzina = count($niz);

// pozicije deljive sa tri: 0, 3, 6, 9, ...
// indeks uvecavamo nakon svake iteracije za 3
for($i=0;$i<$duzina;$i+=3)
    echo $niz[$i], " ";


?>