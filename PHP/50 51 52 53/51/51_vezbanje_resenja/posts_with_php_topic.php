<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP blog</title>
</head>

<body>
    <div class='container'>
        <h1> Posts </h1>
        <?php
        /* Uspostavljamo konekciju sa MySQL serverom. */
        $connection = mysqli_connect('localhost', 'root', '', 'phpblog');


        /* Ako je doslo do greske, ispisujemo poruku o gresci.  Ispis greske je u procesu rada na aplikaciji 
            za nas vazan zbog lakseg pracenja. U produkciji, prventstveno iz bezbednosnih razloga, a potim i sa
            stanovista korisnickog iskustva, nije pozeljno ispisivati greske na ovaj nacin.*/
        if (mysqli_connect_errno()) {
            echo 'There is a problem with connection: ' . mysqli_connect_error();
        } else {

            /* Ako je sve u redu, nastavljamo sa radom. */

            /* Formiramo upit kojim se mogu procitati informacije o svim postovima. */
            $query = "SELECT * FROM posts";

            /* Izvrsavamo upit. */
            $result = mysqli_query($connection, $query);

            /* Dalje pratimo uspesnost izvrsavanja. */
            if ($result == false) {
                /* Ako je doslo do greske, ispisujemo poruku i gresku.  */
                echo 'Error with the query: ' . mysqli_error($connection);
            } else {

                 /* Ako je sve u redu ispisujemo rezultat u formi liste. */
                $number_of_posts = mysqli_num_rows($result);

                /* Stampamo otvarajucu <ul> etiketu. */
                echo "<ul class='list-group'>";

                /* Za svaki post stampamo odgovarajucu stavku liste. */ 
                for ($i = 0; $i < $number_of_posts; $i++) {
                    
                    $post = mysqli_fetch_assoc($result);

                    /* Stampamo otvarajucu <li> etiketu. */
                    echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                    /* Ako je u pitanju post na temu PHP-a dodatno ga stilizujemo. */
                    if ($post['topic'] == 'php') {
                        echo "<strong>" . $post['title'] . ' by ' . $post['author'] . "</strong>";
                    } else {
                        /* U suprotnom samo ispisujemo informacije. */
                        echo  $post['title'] . ' by ' . $post['author'];
                    }
                    echo "<span class='badge badge-primary badge-pill'>";
                    echo $post['topic'];
                    echo "</span>";

                    /* Stampamo zatvarajucu </li> etiketu. */
                    echo "</li>";
                }
                
                /* Stampamo zatvarajucu </ul> etiketu. */
                echo "</ul>";
            }

            /* Zatvaramo konekciju. */
            mysqli_close($connection);
        }
        ?>

    </div>
</body>

</html>