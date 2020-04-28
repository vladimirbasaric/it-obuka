<?php
// Nizovi u PHP-u su realizovani kao asocijativni nizovi,
// odnosno podsecaju na strukturu MAPA o kojoj je bilo price
// u okviru kursa.
// Sa asocijativnim nizovima se misli na niz vrednosti koje su
// asocirane nekim kljucevima (kao mapa).
// Na primer niz [100, 200, 300] je u stvari:
// 0->100, 1->200, 2->300, odnosno 0,1 i 2 su indeksi u nizu.
$xs = [100, 200, 300];
echo '$xs ';
print_r($xs);
echo '<br>';

// Kroz niz mozemo iterirati sa for petljom
foreach ($xs as $x) {
    echo "* $x" . '<br>';
}

// Ukoliko zelimo i indekse
foreach ($xs as $i => $x) {
    echo "* indeks=$i vrednost=$x" . '<br>';
}

// Ne moramo koristiti regularne indekse!
// Mozemo proslediti u principu proizvoljne tipova, a najcesci su
// stringovi.
$ys = [
    'PHP' => 300,
    'JavaScript' => 392,
    'C++' => 234,
    'Python' => 400,
];

foreach ($ys as $jezik => $brojKomentara)
{
    echo "jezik $jezik broj komentara: $brojKomentara" . '<br>';
}