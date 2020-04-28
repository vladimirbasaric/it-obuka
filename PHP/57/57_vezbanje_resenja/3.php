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
    strani info.php i oblika su info.php/id_korisnika preusmeravaju na stranu 3.php
    i oblik 3.php?id=id_korisnika.
*/

/* Citamo informacije o identifikatoru korisnika. */
$id = $_GET["id"];

/* Citamo podatke o odgovarajucem korisniku. */
$user = $users[$id];

/* Formiramo objekat sa potrebnim informacijama. */
$user_info = new stdClass();
$user_info->username = $user["username"];
$user_info->password = $user["password"];

/* Formiramo odgovarajuci HTTP odgovor. Odgovor se sastoji iz zaglavlja i tela. */
/* Postavljamo prvo zaglavlje odgovora. */
/* 
    Naglasavamo da je zahtev uspesno obradjen postavljanjem 
    statusnog koda odgovora na 200 OK. 
*/
header("HTTP/1.1 200 0K");

/* Naglasavamo da su podaci koje saljemo u telu odgovora u JSON formatu. */
header("Content-Type: application/json");

/* Saljemo podatke kroz telo odgovora. */
/* Sve sto se ispise pomocu echo funkcije je sastavni deo tela odgovora. */
echo json_encode($user_info);
