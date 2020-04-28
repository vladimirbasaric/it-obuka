<?php

/* Funkcija koja proverava da li je parametar $n u opsegu od 1 do 100. */
function range_met($n)
{
    if ($n >= 1 && $n <= 100) {
        return TRUE;
    }
    return FALSE;
}

/* Ocitavamo metod zahteva. */
$method = $_SERVER['REQUEST_METHOD'];

if ($method != "POST") {
    /* Ako metod nije POST, postavljamo zaglavlje odgovora na Bad Request. */
    header("HTTP/1.1 400 Bad Request");
    /* Telo odgovora u ovom slucaju ostaje prazno. */
} else {
    /* U suprotnom, citamo informacije o brojevima. */
    /* 
        Podaci su poslati u telu zahteva pa ih citamo sa PHP ulaznog toka. 
        Podaci su u JSON formatu i pre koriscenja ih pozivom funkcije
        json_decode pretvaramo u objekat. 
    */
    $data_in_json = file_get_contents("php://input");
    $data = json_decode($data_in_json);

    /* 
        Proveravamo da li postoje svojstva x, y i z na nivou objekta sa podacima.
        Za proveru da li svojstvo postoji na nivou objekta koristimo funkciju property_exists. 
        Vise na: https://www.php.net/manual/en/function.property-exists.php
    */
    if (
        property_exists($data, "x") == FALSE ||
        property_exists($data, "y") == FALSE ||
        property_exists($data, "z") == FALSE
    ) {
        /* Ukoliko neko od svojstava x, y ili z ne postoji postavljamo zaglavlje odgovora na Bad Request. */
        header("HTTP/1.1 400 Bad Request");
        /* Telo odgovora u ovom slucaju ostaje prazno. */
        
    } else {
        /* U suprotnom ocitavamo vrednosti svojstava. */
        /* 
            Numericku vrednost svojstava dobijamo pomocu funkcije intval. 
            Vise informacija: https://www.php.net/manual/en/function.intval.php
        */
        $x = intval($data->x);
        $y = intval($data->y);
        $z = intval($data->z);

        /* Proveravamo da li su brojevi u dozvoljenom opsegu. */
        if (range_met($x) && range_met($y) && range_met($z)) {

            /* Ako jesu, racunamo njihov zbir. */
            $sum = $x + $y + $z;

            /* Formiramo objekat koji sadrzi rezultat. */
            $response = new stdClass();
            $response->sum = $sum;

            /* Generisemo odgovor. */
            header("HTTP/1.1 200 0K");
            header("Content-Type: application/json");
            echo json_encode($response);
            
        } else {
            /*  Ako brojevi nisu u dozvoljenom opsegu, postavljamo zaglavlje odgovora na Bad Request. */
            header("HTTP/1.1 400 Bad Request");
            /* Telo odgovora u ovom slucaju ostaje prazno. */
        }
    }
}
