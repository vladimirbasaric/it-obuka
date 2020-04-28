<?php

// PHP je dinanicki tipiziran jezik tako da se ne navodi tip promenljive.
$x = 5;

// Broj u pokretnom zarezu
$y = 4.5;

// Aritmetika
$z1 = $x + $y;
$z2 = $x - $y;
$z3 = $x * $y;
$z4 = $x / $y;
$z5 = sqrt($x);
$z6 = pow($x, 2);

// Sada zelimo da ispisemo rezultate,
// ali tako sto pored vrednosti zelimo da
// napisemo i koji je izraz izracunat.
// PHP koristi karakter " da napravi interpolacioni
// string slicno operatoru ` u JavaScript-u u standardu ES6.
// Operator . se u PHP-u koristi za spajanje stringova, odnosno
// odgovaraja operatoru + u jeziku JavaScript.
// Dodavacemo <br> element kako bi u Veb pregledacu napravili novi red.
echo "$x + $y = $z1" . '<br>';
echo "$x - $y = $z2" . '<br>';
echo "$x * $y = $z3" . '<br>';
echo "$x / $y = $z4" . '<br>';
echo "sqrt($x) = $z5" . '<br>';
echo "pow($x, 2) = $z6" . '<br>';