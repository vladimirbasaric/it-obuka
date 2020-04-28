<?php

/* Niz koji sadrzi informacije o korisnicima. */
$users = array(
    45 => array("username" => "Ana", "password" => "abc123"),
    53 => array("username" => "Milan", "password" => "summer"),
    12 => array("username" => "Jelena", "password" => "hjie89"),
    23 => array("username" => "Nenad", "password" => "12345")
);


/* 
    Odgovarajuci .htaccess fajl podesiti tako da se zahtevi koji se salju 
    strani info.php i oblika su info.php/id_korisnika preusmeravaju na stranu 4.php
    i oblik 4.php?id=id_korisnika.
*/


/* Ocitavamo metod zahteva. */
$method = $_SERVER['REQUEST_METHOD'];

if ($method != "GET") {
    /* Ako metod nije GET, postavljamo zaglavlje odgovora na Bad Request. */
    header("HTTP/1.1 400 Bad Request");
    /* Telo odgovora u ovom slucaju ostaje prazno. */
} else {

    /* U suprotnom, citamo informacije o identifikatoru korisnika. */
    $id = $_GET["id"];

    /* Proveravamo da li ovaj identifikator postoji. */
    /* 
        Za proveru koristimo funkciju array_key_exists koja proverava 
        da li se zadati kljuc ($id npr. 53) nalazi u zadatom nizu ($users).
        Vise na: https://www.php.net/manual/en/function.array-key-exists.php
    */
    $exist_id = array_key_exists($id, $users);

    if ($exist_id == FALSE) {
        /* Ako je prosledjen nepostojeci identifikator, postavljamo zaglavlje odgovora na Not Found. */
        header("HTTP/1.1 404 Not Found");
        /* Telo odgovora u ovom slucaju ostaje prazno. */
    } else {

        /* U suprotnom, citamo podatke o odgovarajucem korisniku. */
        $user = $users[$id];

        /* Formiramo objekat sa potrebnim informacijama. */
        $user_info = new stdClass();
        $user_info->username = $user["username"];
        $user_info->password = $user["password"];

        /* Postavljamo zaglavlje odgovora. */
        /* 
            Naglasavamo da je zahtev uspesno obradjen postavljanjem 
            statusnog koda odgovora na 200 OK. 
        */
        header("HTTP/1.1 200 0K");

        /* Naglasavamo da su podaci koje saljemo u telu odgovora u JSON formatu. */
        header("Content-Type: application/json");

        /* Saljemo podatke kroz telo odgovora. */
        echo json_encode($user_info);
    }
}
