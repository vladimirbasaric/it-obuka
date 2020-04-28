<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP greške - podešavanje željene radnje</title>
</head>

<body>
    <?php
    /* 
    Ponekad je potrebno, kada dodje do greske, preuzeti neku specificnu radnju. Na primer, upisati 
    informacije o gresci u bazu podataka, pokrenuti neku rutinu (funkciju) za oporavak ili poslati obavestenje.
    Funkcija koja omogucava da definisemo koja funkcija treba da se izvrsi kada dodje do greske se zove 
    set_error_handler.
    */

    /* Ovde kazemo da je potrebno izvrsiti funkciju save_to_database kada dodje do greske. */
    set_error_handler("save_to_database");

    /* 
    Funkcija koja treba da obradi gresku podrazumevano kao prvi parametar ima kod greske, a kao drugi 
    poruku koja opisuje gresku. Ove podatke do nje dostavlja sam modul za izvrsavanje PHP skriptova.
    */

    function save_to_database($errno, $error_message)
    {

        /* 
        Nasa funkcija, konkretno, prati samo greske koje su prijavljene od strane korisnika i ispisuje
        poruku o njima. 
        */
        switch ($errno) {
            case E_USER_NOTICE:
                echo "User notice...: " . $error_message;
                break;
            case E_USER_WARNING:
                echo "User warning...: " . $error_message;
                break;
        }
    }

    /* Scenario koji pratimo je deljenje nulom. */
    $a = 10;
    $b = 0;
    if ($b == 0) {
        /* Kada je delilac jednak nuli, prijavljujemo gresku tipa E_USER_NOTICE i prosledjujemo poruku "Deljenje nulom!" */
        trigger_error("Deljenje nulom!", E_USER_NOTICE);

        /* 
        Informacija o gresci ce biti preusmerena na save_to_database funkciju koja proveriti o kojoj gresci se radi, 
        a zatim ce, kada prepozna da je u pitanju E_USER_NOTICE, za nas ispisati prosledjenu poruku.  
        */
    } else {
        echo $a / $b;
    }
    ?>
</body>

</html>