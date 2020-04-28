<?php
session_start();

/* Niz koji sadrzi identifikatore proizvoda. */
$_SESSION['product_ids'] = array('id342', 'id517', 'id892');

/* Niz koji sadrzi opise proizvoda. */
$_SESSION['product_descriptions'] = array(
    'id342' => 'JavaScript in Action',
    'id517' => 'PHP Cookbook',
    'id892' => 'Modern Web Development'
);

/* Niz koji sadrzi cene proizvoda. */
$_SESSION['product_prices'] = array(
    'id342' => 20,
    'id517' => 25,
    'id892' => 40
);

/* 
    Ukoliko korisnik prvi put posecuje ovu stranu, kreira se prazna potrosacka korpa. 
    if uslov nam je neophodan jer ako je korisnik posecivao vec neke strane i odabrao neke proizvode i
    vratio se na ovu stranu, inicijalizacija praznim nizom bi ove vrednosti obrisala. 
*/
if (!isset($_SESSION['shopping_bag'])) {
    $_SESSION['shopping_bag'] = array();
}

/* Funkcija koja ispisuje sadrzaj korpe vrlo skromnog stila. :) */
function print_shopping_bag_content()
{
    echo "<div>";

    $total_product_price = 0;

    /* 
        count() funkcija se koristi za prebrojavanje elemenata niza. 
        Ukoliko je korpa prazna, ispisujemo odgovarajucu poruku.
    */
    if (count($_SESSION['shopping_bag']) == 0) {
        echo "No products in a shopping bag!";
        echo "<br>";
    } else {
        /* 
            U suprotnom za svaki element korpe koji je oblika id_proizvoda => kolicina_proizvoda 
            ispisujemo opis proizvoda i njegovu kolicinu.
        */
        foreach ($_SESSION['shopping_bag'] as $product_id => $product_quantity) {
            /* Ocitavamo opis proizvoda. */
            $description = $_SESSION['product_descriptions'][$product_id];

            /* Stampamo poruku oblika opis_proizvoda x kolicina_proizvoda. */
            echo "$description x $product_quantity";
            echo "<br>";

            /* Ocitavamo cenu proizvoda. */
            $price = $_SESSION['product_prices'][$product_id];

            /* Dodajemo cene narucenih proizvoda na ukupnu cenu. */
            $total_product_price += $price * $product_quantity;
        }
    }

    /* Ispisujemo ukupnu cenu proizvoda u korpi. */
    echo "Total price is " . $total_product_price;

    echo "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Shopping bag</title>
</head>

<body>

    <div id='shopping_bag_description'>
        <h3> Shopping bag </h3>

        <?php
        /* Pozivamo funkciju za ispis proizvoda korpe. */
        print_shopping_bag_content();
        ?>
    </div>
    <div>
        <h3> The list of all products </h3>
        <ul>
        <?php
        /* 
            Za svaki od proizvoda stampamo odgovarajuci link koji sadrzi identifikator proizvoda i njegov opis. 
            Na primer, za proizvod ciji je identifikator id342 stampamo link oblika 
            <a href=’product.php?productId=id342’> JavaScript in Action </a>
        */
        foreach ($_SESSION['product_descriptions'] as $product_id => $product_description) {
            echo "<li>";
            echo "<a href='products.php?productId=$product_id'> $product_description </a>";
            echo "</li>";
        }
        ?>
        </ul>
    </div>

</body>

</html>