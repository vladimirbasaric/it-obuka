<?php

// promenljiva se uvodi sa $ime_promenljive
// nazivi promenljivih su case-sensitive
// $x i $X su dve razlicite promenljive
// svaka naredba se zavrsava sa ;
$x = 11;

/*
sintaksa za if-else:
if (uslov) {
    // neke naredbe
} else {  // else grana nije obavezna
    // neke naredbe
}
*/

// % - odredjuje ostatak pri celobrojnom deljenju
if($x % 2 == 0)
    // echo ispisuje dati sadrzaj na stranici
    // . je operator nadovezivanja niski
    echo "Broj ".$x." je paran.";
else
    // print takodje ispisuje sadrzaj na stranici
    // ima povratnu vrednost 1, pa moze da se koristi i u izrazima
    // manje efikasno od echo
    print "Broj ".$x." je neparan.";

?>