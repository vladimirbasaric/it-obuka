<?php
/*
mozemo imati vise uslova - ugnjezdeni if:
if (uslov1) {
    // neke naredbe
} elseif (uslov2) {
    // neke naredbe
} elseif (uslov3) {
    // neke naredbe
// poslednji else - moze i bez njega
} else {
    // neke naredbe
}
*/

$prvi = 11;
$drugi = 12;

if($prvi < $drugi)
    echo "Prvi broj je manji od drugog broja.";
elseif($prvi > $drugi)
    echo "Prvi broj je veci od drugog broja.";
else
    echo "Brojevi su jednaki.";

?>