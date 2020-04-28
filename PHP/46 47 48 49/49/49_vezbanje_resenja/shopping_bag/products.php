<?php
session_start();

/*
    Link koji vodi korisnika do ove strane je oblika 
    product.php?productId=id342
    
    Primetimo da je format ovog linka ekvivalentan formatu koji se generise kada se salju podaci iz 
    formulara metodom tipa GET. Na primer, isti link bi se generisao klikom na submit dugme formulara 
    kod kojeg je action atribut postavljen na vrednost product.php i koji sadrzi tekstualni element
    ciji je name atribut postavljan na vrednost productId. Zbog ove ekvivalentnosti, 
    identifikator prosledjenog proizvoda mozemo procitati iz linka strane pomocu
    niza $_GET trazeci element sa kljucem productId. 

*/
$product_id = $_GET['productId'];

/* Prvo proveravamo da li je korisnik zadao postojeci identifikator proizvoda. */
if (in_array($product_id, $_SESSION['product_ids']) == false) {

    /* Ako to nije slucaj, preusmeravamo korisnika na stranu all_products.php. */
    header('all_products.php');
}

/* Funkcija koja ispisuje sadrzaj korpe vrlo skromnog stila je prokomentarisana u fajlu all_products.php. */
function print_shopping_bag_content()
{
    echo "<div>";

    $total_product_price = 0;

    if (count($_SESSION['shopping_bag']) == 0) {
        echo "No products in a shopping bag!";
        echo "<br>";
    } else {

        foreach ($_SESSION['shopping_bag'] as $product_id => $product_quantity) {
            $description = $_SESSION['product_descriptions'][$product_id];

            echo "$description x $product_quantity";
            echo "<br>";

            $price = $_SESSION['product_prices'][$product_id];
            $total_product_price += $price * $product_quantity;
        }
    }

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

        //Ispis koriscen za testiranje.
        //print_r($_SESSION['shopping_bag']);
        ?>
    </div>
    <div>
        <h3> Product information </h3>

        <div id='product_description'>
            <?php
            /* Ispisujemo informacije o odabranom proizvodu. */
            /* Prvo ispisujemo opis. */
            echo "Product description: " . $_SESSION['product_descriptions'][$product_id];
            echo "<br>";
            /* Zatim ispisujemo cenu proizvoda. */
            echo "Product price: " . $_SESSION['product_prices'][$product_id];
            echo "<br>";
            ?>
        </div>

    </div>

    <div>
        <!-- Generisemo linkove do strana add_product.php i remove_product.php na kojima se dodaje u korpu 
        tj. brise iz nje proizvod sa prosledjenim identifikatorom. -->
        
        <a href='add_product.php?productId=<?php echo $product_id; ?>'>Add product to the bag </a>
        <br>
        <a href='remove_product.php?productId=<?php echo $product_id; ?>'> Remove product from the bag </a>
    </div>

    <div>
        <br>
        <a href='all_products.php'>All products</a>
        <br>
    </div>
</body>

</html>