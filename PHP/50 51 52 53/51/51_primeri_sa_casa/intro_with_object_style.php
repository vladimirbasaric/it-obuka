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

        /* 
            Ovaj fajl demonstrira koriscenje objektne verzije MySQLi API-ja. 
            U pitanju su ekvivalenti proceduralnih funkcija koriscenih u intro.php fajlu. 
            Potrebno je voditi racuna o argumentima funkcija i usaglasenostima tipova.
        */

        /* 
            U duhu objektne paradigme kreira se objekat koji sadrzi sve informacije vazne za odrzavanje konekcije
            sa MySQL serverom. Obratiti paznju na koriscenje new rezervisane reci. */
        $connection = new mysqli('localhost', 'root', '', 'phpblog');
        if ($connection->connect_errno) {
            echo 'There is problem with connection: ' . $connection->connect_error;
        } else {

            /* Formiramo upit kojim dohvatamo sve informacije o postovima. */
            $query = "SELECT * FROM posts";

            /* Izvrsavamo upit. query je sada metod objekta $connection i kao rezultat daje novi objekat koji predstavlja
            rezultat, ako je sve u redu, ili false ako dodje do greske.  */            
            $result = $connection->query($query);
            if ($result == false) {
                echo 'Error with the query: ' . mysqli_error($connection);
            } else {

                /* Broj redova rezultata je sada svojstvo $result objekta. */
                $number_of_posts = $result->num_rows;

                /*
                    Za dohvatanje jednog reda rezultata moze se koristiti metoda fetch_assoc().
                    Ona, kao i njen proceduralni ekvivalent, mysqli_fetch_assoc() dohvaceni red  
                    interpretira kao asocijativni niz. 
                */
                // for ($i = 0; $i < $number_of_posts; $i++) {
                //     $post = $result->fetch_assoc();
                //     echo "<div class='jumbotron'>";
                //     echo "<h3>" . $post['title'] . " </h3>";
                //     echo "<small> Created " . $post['created_at'] . " by " . $post['author'] . "</small>";
                //     echo "<p>" . $post['content'] . " </p>";
                //     $post_id=$post['id'];
                //     echo "<p> <a href='post.php?id=$post_id'> Read more </a></p>";
                //     echo "</div>";
                // }

                /*
                    Za dohvatanje jednog reda rezultata moze se koristiti metoda fetch_object().
                    Ona, dohvaceni red interpretira kao objekat cija svojstva odgovaraju imenima
                    kolona rezultata, a vrednosti vrednostima iz baze. 
                */ 
                for ($i = 0; $i < $number_of_posts; $i++) {
                    $post = $result->fetch_object();
                    echo "<div class='jumbotron'>";
                    echo "<h3>" . $post->title . "</h3>";
                    echo "<small> Created " . $post->created_at . " by " . $post->author . "</small>";
                    echo "<p>" . $post->content . "</p>";
                    $post_id = $post->id;
                    echo "<p> <a href='post.php?id=$post_id'> Read more </a></p>";
                    echo "</div>";
                }
            }

            /* Zatvaramo konekciju. */
            $connection->close();
        }
        ?>
    </div>
</body>

</html>