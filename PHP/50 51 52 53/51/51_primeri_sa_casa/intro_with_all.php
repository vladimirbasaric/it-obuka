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

        /* 
            Ovaj fajl predstavlja nesto drugacije organizovan deo iscitavanja podataka iz baze 
            koji je opisan u fajlu intro.php. Zbog toga sadrzi samo komentare koji se odnose na razliku
            ovih fajlova. 
        */

        $connection = mysqli_connect('localhost', 'root', '', 'phpblog');
        if (mysqli_connect_errno()) {
            echo 'There is a problem with connection: ' . mysqli_connect_error();
        } else {

            $query = "SELECT * FROM posts";
            $result = mysqli_query($connection, $query);
            if ($result == false) {
                echo 'Error with the query: ' . mysqli_error($connection);
            } else {

                /* 
                Jos jedan nacin za dohvatanje rezultata izvrsenog upita je pomocu funkcije
                mysqli_fetch_all koja nam omogucava da za razliku od mysqli_fetch_assoc funkcije
                (kojom dohvatamo samo jedan red rezultata) dohvatimo sve redove odjednom. 
                Zato je rezultat ove funkcije niz asocijativnih nizova (MYSQLI_ASSOC argument to naglasava).
                */
                $all_posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

                /* Broj postova se moze dobiti kao broj elemenata niza. */
                $number_of_posts = count($all_posts);

                for ($i = 0; $i < $number_of_posts; $i++) {
                    echo "<div class='jumbotron'>";
                    /* 
                    Pojedinacni postovi su elementi niza. Tako je $all_posts[0] nulti post, $all_posts[1]
                    prvi post, ... Svi ovi elementi (postovi) su sami po sebi asocijativni nizovi. 
                    To se najbolje moze proveriti izvrsavanjem print_r($all_post[i]) naredbe. 
                    */
                    $post = $all_posts[$i];

                    echo "<h3>" . $post['title'] . " </h3>";
                    echo "<small> Created " . $post['created_at'] . " by " . $post['author'] . "</small>";
                    echo "<p>" . $post['content'] . " </p>";
                    $post_id = $post['id'];
                    echo "<p> <a href='post.php?id=$post_id'> Read more </a></p>";
                    echo "</div>";
                }
            }

            mysqli_close($connection);
        }
        ?>
    </div>
</body>

</html>