<?php
// Novina iz PHP7 koja uvodi striktan rezim provere tipova
// kao sto je prikazano na liniji 25.
declare(strict_types=1);

// Funkcija dosta podsecaju na jezik JavaScript.

function saberi($x, $y)
{
    return $x + $y;
}

$z = saberi(5, 10);
echo "$z" . '<br>';

// Anonimne funkcije! :)
$saberi2 = function($x, $y) {
    return $x + $y;
};
$z = $saberi2(5, 10);
echo "$z" . '<br>';

// Od verzija PHP7 dozvoljeno je kontrolisanje provere tipova
// argumenata i povratnih vrednosti unutar funkcija.
function saberi3(int $x, int $y): int
{
    return $x + $y;
}

$z = saberi3(5, 10);
echo "$z" . '<br>';

// Izbacuje gresku
// $z = saberi3("greska", 10);