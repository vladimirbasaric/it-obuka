<?php
session_start();

/* 
Link koji vodi korisnika do ove strane je oblika 
remove_product.php?productId=id342
pa za citanje identifikatora proizvoda koristimo $_GET niz.
*/

/* Ocitavamo identifikator proizvoda kojeg treba obrisati. */
$product_id = $_GET['productId'];

/* Proveravamo prvo da li postoji prozivod sa zadatim identifikatorom u nizu proizvoda. */
if (in_array($product_id, $_SESSION['product_ids']) == false) {

    /* Ako takav proizvod ne postoji, usmeravamo korisnika na stranu all_products.php. */
    header('all_products.php');
}

/*
    Proveravamo da li je prozivod vec narucivan tj. da li se nalazi u potrosackoj korpi. 
    Posto je niz $_SESSION['shopping_bag'] oblika id_proizvoda => kolicina_proizvoda, 
    treba da proverimo da li postoji element sa kljucem product_id, a ne sa vrednoscu product_id. 
    Zato koristimo funkciju array_key_exists:
    https://www.php.net/manual/en/function.array-key-exists.php

*/
if (array_key_exists($product_id, $_SESSION['shopping_bag']) == true) {
    /* Ako je proizvod narucivan, proveravamo njegovu kolicinu. */
    /* 
        Ako postoji samo jedan primerak proizvoda, onda proizvod brisemo iz korpe. 
        Za brisanje proizvoda iz korpe koristimo funkciju unset().
    */
    if ($_SESSION['shopping_bag'][$product_id] == 1) {
        unset($_SESSION['shopping_bag'][$product_id]);
    } else {
        /* Inace, ako postoji vise primeraka proizvoda, umanjujemo njegovu kolicinu za 1. */
        $_SESSION['shopping_bag'][$product_id] -= 1;
    }
}

/* Usmeravamo dalje korisnika na stranu sa koje je dosao. */
header("Location: products.php?productId=$product_id");
