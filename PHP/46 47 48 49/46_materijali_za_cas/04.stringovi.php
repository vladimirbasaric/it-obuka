<?php

// Stringovi (niske) su vrlo vazan tip podataka u jeziku PHP
// usled samog domena primene PHP-a, odnosno generisanja HTML stranica.
// Stringovi se mogu napravi sa jednostrukim navodnicima '
// i sa dvostrukim navodnicima ".
// Razlika je u tome sto su jednostruki navodnici regularan string,
// a " interpolacioni string koji ce pojavljivanja svake promenljive
// zameniti njenim vrednostima.

$x = 5;
$y = 10;
$z = $x + $y;

echo '$x + $y = $z' . '<br>';
echo "$x + $y = $z" . '<br>';

// Operator . je vec pomenut, radi se o operatoru za nadovezivanje stringova,
// odnosno . radi ono sto je + radio u JS-u.
$poruka = 'Zdravo' . ' ' . 'svete!';
echo $poruka;