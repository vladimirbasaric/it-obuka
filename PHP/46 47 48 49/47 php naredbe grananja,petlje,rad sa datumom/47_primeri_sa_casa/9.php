<?php

$niz =  array(1,2,3,4,5,6,7,8,9,10);

// count daje duzinu niza, tj. broj elemenata u nizu
$duzina = count($niz);

// element deljiv sa tri moze biti na bilo kojoj poziciji
for($i=0;$i<$duzina;$i++)
    if($niz[$i] % 3 == 0)
        echo $niz[$i], " ";


?>