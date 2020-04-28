<?php

$x = 5; // zadati broj
$zbir = 0; // inicijalizacija promenljive u kojoj racunamo zbir
// I nacin: provera da li je tekuci broj neparan
for($broj = 1; $broj <= $x; $broj++)
    if($broj % 2 == 1)
        $zbir += $broj;

echo "Zbir neparnih u rasponu od 1 do $x je $zbir. <br>";

$zbir = 0;
// II nacin: uvecanje brojaca za 2, cime pocevsi od 1 dobijamo sve neparne
for($broj = 1; $broj <= $x; $broj+=2)
    $zbir += $broj;

echo "Zbir neparnih u rasponu od 1 do $x je $zbir.";
?>