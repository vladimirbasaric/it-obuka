<?php

// konstante se definisu pomocu define funkcije
// pocinju slovom ili donjom crtom (za razliku od promenljivih)
define("POZDRAV", "Zdravo svima!<br>");
echo POZDRAV;

// treci argument se moze podesiti na true
// tada nije bitna razlika izmedju velikih i malih slova
define("POZDRAV2", "Ponovo zdravo svima!<br>", true);
echo pozdrav2;

// one su globalne promenljive
define("POZDRAV3", "Dovjdenja svima!<br>");

// mogu se npr. pozvati i unutar funkcije, a definisati van
function pozdravljanje() {
    echo POZDRAV3;
}
 
pozdravljanje();

?>