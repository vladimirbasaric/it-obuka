<?php
/* Nagovestavamo da je ova strana deo korisnicke sesije. */
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sesije - korisničke preferencije - strana sa željenim prikazom </title>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class='container'>


    <?php
    $style = '';

    /* Prvo proveravamo da li je na nivou sesije sacuvana informacija o boji i velicini slova. */
    if (isset($_SESSION['color']) && isset($_SESSION['fontSize'])) {

        /* Ako je to slucaj, generisemo odgovarajuce stilove. */

        /* Za boju slova formiramo string oblika color:sacuvana_boja; */
        $colorStyle = 'color:' . $_SESSION['color'] . ';';

        /* Za velicinu slova formiramo string oblika font-size:sacuvana_velicina_slova px; */
        $fontStyle = 'font-size:' . $_SESSION['fontSize'] . 'px;';

        /* Na osnovu prethodno formiranih stringova formiramo string oblika 
            style='color:sacuvana_boja;font-size:sacuvana_velicina_slova px;'
            koji predstavlja korektan style atribut elementa. */
        $style = "style = '" . $colorStyle . $fontStyle . "'";
    }

    /* Ako nemamo informaciju o zeljenoj boji i velicini slova, koristimo $style promenljivu koja je 
    inicijalizovana praznom niskom pre if naredbe. */
    ?>
    <div>
        <!-- Ispisujemo formirani style atribut prilikom prikaza pasusa. -->
        <p <?php echo $style; ?>>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <div style='margin-top: 40px;'>
        <a href='1.php'> 1.php </a>
        <a href='3.php'> 3.php </a>
    </div>
</body>

</html>