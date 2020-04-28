<?php
/* Naglasavamo da je ova strana deo korisnicke sesije. */
session_start();

/* 
    Ukoliko se korisnik ulogovao, sigurni smo da u $_SESSION nizu postoji njegovo korisnicko ime i njegova sifra. 
    Ako to nije slucaj, preusmeravamo korisnika na stranu za logovanje.
    header funkcija se koristi za postavljanje zaglavlja odgovora koje veb server salje veb klijentu. 
    https://www.php.net/manual/en/function.header.php
        
 */
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    header('Location: 1.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Vođenje korisnika kroz aplikaciju </title>
</head>

<body class="container">
    <?php
    /* 
        Nadalje podatke iz $_SESSION niza mozemo koristiti za koje god zelimo svrhe. 
        Ovde ih koristimo da bismo generisali pozdravnu poruku "Hello to admin Pera!". 
    */
    echo "Hello to " . $_SESSION['mode'] . " " . $_SESSION['username'] . "!";
    echo "<br>";
    echo "This sicret content can be seen only by logged users.";
    ?>

    <!-- Korisnik se moze odjaviti klikom na dugme logout. -->
    <form action='4.php'>
        <input type='submit' value='Logout'>
    </form>
</body>

</html>