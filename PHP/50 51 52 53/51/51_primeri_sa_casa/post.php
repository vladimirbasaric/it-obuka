<?php
/* 
    Ocekuje se da korisnik pristupa ovoj strani navodjenjem adrese (ili generisanjem adrese) oblika
    post.php?id=894. Zato, ako nije zadat identifikator posta, vrsimo redirekciju na pocetnu stranu. 
*/
if (!isset($_GET['id'])) {
    header('Location: intro.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 
        Za stilizovanje sadrzaja koriscena je Bootstrap tema dostupna na adresi 
        https://bootswatch.com/cerulean/
    -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP blog</title>
</head>

<body>
    <div class='container'>
        <!-- Povratak na uvodnu stranu. -->
        <a href='intro.php' class="btn btn-primary">Back</a>

        <h1> Posts </h1>
        <?php

        /* Uspostavljamo konekciju sa MySQL serverom. */
        $connection = mysqli_connect('localhost', 'root', '', 'phpblog');

        /* 
            U slucaju greske ispisujemo poruku o gresci. 
            Pojavu greske pratimo preko vrednosti ERRNO kontante koja dobija vrednost nakon svakog izvrsenog 
            SQL upita. Vrednost 0 oznacava da je sve u redu, dok vrednosti razlicite od nule odgovaraju razlicitim
            statusima tj. greskama. 
         */
        if (mysqli_connect_errno()) {
            echo 'There is problem with connection: ' . mysqli_connect_error();
        } else {

            /* Razmotrimo scenario u kojem imamo zlonamernog korisnika. Sta ce se desiti sa nasim upitom ako umesto 
            da unese broj posta unese izraz oblika: "89; delete * from posts;" ili  "a or 1=1; --"?
            U prvom slucaju ce obrisati ceo sadrzaj nase baze (!!!) a u drugom moze dobiti sve informacije o 
            nasim korisnicima (!!!) za koriscenje specificnih funkcija jer je uslov u where liniji uvek tacan. Ovakve vrste napada su poznate pod imenom 
            SQL injekcije (engl. SQL injections) i da bi ih predupredili dobra praksa je vrsiti sanitetizaciju (uklanjanje 
            nedozvoljenih karaktera) i validaciju (proveru dozvoljenih unosa). Funkcija mysqli_real_escape_string jer prva u redu 
            odbrane i omogucava nam da ispred sumnjivih karaktera koji imaju specijalno znacenje u SQL injekcijama (', ", NUL (ASCII 0), \n, \r, \, and Control-Z) 
            ubacimo karakter \ (tzv. escape ). Ove funkcije nam omogucavaju i nesmetan rad sa sadrzajima koji imaju npr. 
            apostrofe tipa o'reilly. */

            $post_id = mysqli_real_escape_string($connection, $_GET['id']);

            /* Formiramo upit kojim dohvatamo sve informacije o odabranom postu. */
            $query = "SELECT * FROM posts WHERE id=$post_id";

            /* Ivrsavamo upit. */
            $result = mysqli_query($connection, $query);

            /* Ako je doslo do greske, ipsisujemo poruku o gresci. */
            if ($result == false) {
                echo "<div class='jumbotron'>";
                echo "Error with the query: " . mysqli_error($connection);
                echo "</div>";
            } else {
                /* U suprotnom, ocitavamo broj postova rezultata. */
                $number_of_posts = mysqli_num_rows($result);

                /* Ako je broj postova 0, korisnik je uneo nepostojeci identifikator. */
                if ($number_of_posts == 0) {
                    echo "<div class='jumbotron'>";
                    echo 'There is no post with this id!';
                    echo "</div>";
                } else {
                    /* U suprotnom ispisujemo informacije o odabranom postu. */
                    /* Dohvatamo podatke. */
                    $post = mysqli_fetch_assoc($result);
                    /* Formatiramo ih. */
                    echo "<div class='jumbotron'>";
                    echo "<h3>" . $post['title'] . " </h3>";
                    echo "<small> Created " . $post['created_at'] . " by " . $post['author'] . "</small>";
                    echo "<p>" . $post['content'] . " </p>";
                    echo "</div>";
                }
            }

            /* Zatvaramo konekciju. */
            mysqli_close($connection);
        }
        ?>
    </div>
</body>

</html>