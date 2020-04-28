<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- preuzeto sa Bootstrap sajta iz CDN sekcije https://getbootstrap.com/docs/4.3/getting-started/download/ -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- 
        Za stilizovanje sadrzaja koriscena je Bootstrap tema dostupna na adresi 
        https://bootswatch.com/cerulean/
    -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP blog</title>
</head>

<body>
    <!-- Skromna navigacija za pregledanje funkcionalnosti za rad sa postovima. -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">PHP blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="intro.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_new_post.php">Add new post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delete_post_from_list.php">Delete post</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class='container'>
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

         /* 
            Ako je doslo do greske, ispisujemo poruku o gresci.  Ispis greske je u procesu rada na aplikaciji 
            za nas vazan zbog lakseg pracenja. U produkciji, prventstveno iz bezbednosnih razloga, a potim i sa
            stanovista korisnickog iskustva, nije pozeljno ispisivati greske na ovaj nacin.
        */
        if (mysqli_connect_errno()) {
            echo 'There is problem with connection: ' . mysqli_connect_error();
        } else {
            /* Formiramo upit kojim dohvatamo sve informacije o postovima. */
            $query = "SELECT * FROM posts";

            /* Izvrsavamo upit. */
            /* 
                U slucaju SELECT upita rezultat moze biti false ako je doslo do greske u izvrsavanju upita 
                ili objekat koji predstavlja "tabelarni" rezultat. 
            */  
            $result = mysqli_query($connection, $query);

            /* Ako je doslo do greske, ipsisujemo poruku o gresci. */
            if ($result == false) {
                echo "<div class='jumbotron'>";
                echo "Error with the query: " . mysqli_error($connection);
                echo "</div>";
            } else {
                /* Ako je sve u redu, prikazacemo informacije o postovima iz baze. */

                /* Prvo izracunavamo broj postova pracenjem broja redova u tabelarnom rezultatu. */
                $number_of_posts = mysqli_num_rows($result);

                /* Pojedinacne postove cemo obradjivati u petlji. */
                for ($i = 0; $i < $number_of_posts; $i++) {
                    /* 
                        Jedan red tabelarnog rezultata mozemo dohvatiti mysqli_fetch_assoc funkcijom.
                        Ova funkcija red koji dohvata tretira kao asocijativni niz sa kljucevima koji odgovaraju
                        imenima kolona i vrednostima koji odgovaraju vrednostima sacuvanim u bazi.
                        
                        Kada se sledeci put pozove, mysqli_fetch_assoc funkcija ce procitati naredni red rezultata.

                        Postoji i alternative ove funkcije koja se zove mysqli_fetch_row. 
                        Razlika je u tome sto ova funkcija koristi numericke vrednosti za kljuceve. 
                        Kod je u tom slucaju blago nepregledan i moze biti osetljiv na promene tabela. 
                        
                        Jos jedna mogucnost citanja sadrzaja je uz koriscenje funkcije mysqli_fetch_array. 
                        https://www.php.net/manual/en/mysqli-result.fetch-array.php
                    */
                    $post = mysqli_fetch_assoc($result);

                    /* Prikazujemo podatke o postu uz doterivanja podrzana Bootstrap sablonom. */
                    echo "<div class='jumbotron'>";
                    echo "<h3>" . $post['title'] . " </h3>";
                    echo "<small> Created " . $post['created_at'] . " by " . $post['author'] . "</small>";
                    echo "<p>" . $post['content'] . " </p>";
                    $post_id = $post['id'];

                    /* Postavljamo i link koji vodi do stranice na kojoj se mogu videti informacije o ovom blogu. */
                    /* Link koji vodi do ove strane vrlo specificno formatiramo. */
                    echo "<p> <a href='post.php?id=$post_id'> Read more </a></p>";
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