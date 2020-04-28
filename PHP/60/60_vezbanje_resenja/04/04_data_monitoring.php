<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data monitoring</title>
</head>

<body>
    <?php

    /*
    Naprativi bazu podataka dataMonitoring koja sadrži jednu tabelu dataErrors sa dvema numeričkim kolonama 
    value i errorType. 

    Napisati PHP skript koji proverava numeričke vrednosti sadržane u zadatom nizu $data: ako se naiđe na 
    vrednost koja je izvan intervala od -50 do +50, treba prijaviti grešku tipa E_USER_WARNING, 
    a ako je ukupan broj podataka manji od 10, grešku tipa E_USER_NOTICE. Sve ove greške treba obraditi 
    funkcijom dataErrorHandler koja odgovarajuće podatke upisuje tabelu dataErrors baze podataka dataMonitoring. 
    Ako je reč o grešci tipa E_USER_WARNING vrednost koja se upisuje treba da odgovara vrednosti elementa niza, 
    dok errorType treba da ima vrednost 1. U slučaju greške tipa E_USER_NOTICE, polje value treba popuniti brojem 
    elemenata niza, a errorType treba postaviti na 0.
    */

    /* Funkcije sa rad sa bazom podataka su sacuvane u eksternom fajlu db_functions.php. */
    include('db_functions.php');


    function save_to_database($errno, $error_value)
    {
        /* Povezujemo se za bazom podataka. */
        connect();
        /* Proveravamo o kom tipu greske se radi i u zavisnosti od toga upisujemo odgovarajuce vrednosti. */
        /* Funkciju za prijavljivanje greske (trigger_error) smo pozivali tako da nam prosledjuje potrebne vrednosti. */
        switch ($errno) {
            case E_USER_NOTICE:
                insert_values($error_value, 0);
                break;
            case E_USER_WARNING:
                insert_values($error_value, 1);
                break;
        }
        /* Raskidamo konekciju sa bazom. */
        disconnect();
    }
    /* Postavljamo funkciju za obradu gresaka. */
    set_error_handler("save_to_database");

    /* Definisemo minimalni broj potrebnih podataka. */
    define("MINIMUM_DATA", 10);


    /* Uvodimo niz sa podacima. */
    $data = array(24.1, 18.7, 64.2, -74.2, 14);
    $data_length = count($data);

    
    /* Ako niz sadrzi manje od minimalnog broja elemenata, prijavljujemo gresku. */
    if (count($data) < MINIMUM_DATA) {
        /* Poruka o gresci sadrzi tekucu duzinu niza. */
        trigger_error($data_length, E_USER_NOTICE);
    }

    /* Prolazimo kroz niz sa podacima. */
    foreach ($data as $value) {
        /* Ako je tekuca vrednost izvan dozvoljenog opsega, prijavljujemo gresku. */
        if ($value < -50 || $value > 50) {
            /* Poruka o gresci sadrzi problematicnu vrednost. */
            trigger_error($value, E_USER_WARNING);
        }
    }

    /* Podsecamo korisnika da pogleda vrednosti u bazi. :) */
    echo "Check you database: all the changes are made there!";

    ?>
</body>

</html>