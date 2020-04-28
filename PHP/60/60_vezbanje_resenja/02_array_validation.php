<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array validation</title>
</head>

<body>
    <?php
    /* 
    Napisati PHP skript koji za zadati numerički niz proverava da li sadrži barem jedan paran broj. 
    Ako to nije slučaj, skript treba da prijavi grešku tipa E_USER_WARNING i ispiše poruku da nedostaje 
    takav broj.  Na primer, za niz $a=array(13, 7, 7, 25) bi trebalo da se prikaže upozorenje. 
    */

    /* Promenljiva koja nam pomaze da ispratimo da li smo pronasli paran broj. */
    $condition_met = FALSE;

    /* Uvodimo niz i izracunavamo broj elemenata u nizu. */
    $a = array(13, 7, 7, 25);
    $n = count($a);

    /* Proveravamo da li je u nizu sadrzan paran broj. */
    for ($i = 0; $i < $n; $i++) {
        if ($a[$i] % 2 == 0) {
            /* Ako jeste, azuriramo promenljivu $condition_met i prekidamo izvrsavanje petlje. */
            $condition_met = TRUE;
            break;
        }
    }

    /* 
    Ako nismo pronasli paran broj, prjavljujemo upozorenje. Posto je u pitanju korisnicki definisano
    upozorenje, koristimo funkciju trigger_error sa konstantom E_USER_WARNING. 
    */
    if ($condition_met == FALSE) {
        trigger_error('There is no even numbers in the array!', E_USER_WARNING);
    }

    ?>
</body>

</html>