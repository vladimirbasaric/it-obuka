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
                Za ispisa rezultata mozemo koristiti i while petlju. 
                Cesto je kod struktuiran nalik sledecem kodu u kojem se oslanjamo
                na povratnu vrednost NULL funkcije mysqli_fetch_assoc u slucaju kada nema 
                vise "redova" u rezultatu cime se obezbedjuje izlazak iz petlje. 
                */
                while ($post = mysqli_fetch_assoc($result)) {
                    echo "<div class='jumbotron'>";
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