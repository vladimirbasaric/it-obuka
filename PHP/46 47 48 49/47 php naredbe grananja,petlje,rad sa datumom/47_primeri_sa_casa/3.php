<?php

/* 

Switch je jos jedna naredba grananja. Sluzi 
za poredjenje vrednosti nekog izraza
po jednakosti.

Sintaksa je sledeca. Nakon kljucne reci switch 
u zagradama navodimo promenljivu ciju vrednost 
proveravamo. Unutar viticastih zagrada navodimo 
tzv. slucajeve pomocu kljucne reci case i 
vrednosti pored. Zatim se navodi znak : i slede 
naredbe koje ce biti izvrsene u slucaju da 
promenljiva ima navedenu vrednost.

Jednom kada se pronadje poklapanje i udje se u 
neki od slucajeva (case-ova), izvrsavace se sve 
naredbe ispod dok se ne naidje na kraj switch-a 
ili do naredbe za prekid (break).

Na kraju switch-a obicno se navodi i default. 
To je slucaj koji obuhvata sve vrednosti koje 
nisu obradjene u nekom od prethodnih slucajeva. 

Takodje, jednom kada se pronadje poklapanje, 
bilo sa nekim od case-ova ili sa default, 
ostale slucajevi ispod se ne proveravaju. Zbog 
toga je bitno da se default nadje na samom 
kraju i da za sve vrednosti koje proveravamo 
bude jedan case.

Propadanje kroz ostale slucajeve moze biti 
korisno ukoliko za vise razlicitih vrednosti 
zelimo da se izvrse iste instrukcije.

Na primer, za sve samoglasnike ispisujemo istu 
poruku, pa cemo dozvoliti da se udje u slucaj i 
propada do poslednjeg gde se ispisuje poruka 
jednom, a zatim izlazi iz switch-a zbog naredbe 
break.

*/
        
$slovo = "i";

switch ($slovo) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "Samoglasnik.";
        break;
    default:
        echo "Suglasnik.";
        break;
}

?>