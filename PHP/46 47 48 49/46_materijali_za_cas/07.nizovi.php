<?php

$xs = [];
$n = 5;
// Dodajemo brojeve na kraj niza
for ($i = 1; $i < $n; $i++) {
    // array_push($xs, $i);
    // ili bolji nacin (jer je brzi jer ne poziva funkciju)
    $xs[] = $i;
}

foreach ($xs as $x) {
    echo "$x ";
}
echo '<br>';