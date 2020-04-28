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
    <!-- ToDo: Dodati navigaciju sa strane intro.php -->
    
    <div class='container'>
        
        <h1> Add new post </h1>

        <!-- Formular kojim se zadaje novi post. Zbog lakseg testiranja koriscen je metod GET. U praksi bi 
        za ovu svrhu bilo prirodnije iskoristiti metod POST jer se prenosi sadrzaj textarea polja. -->
        <form action="" method="GET">
            <fieldset>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" srows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter blog author">
                </div>

                <fieldset class="form-group">
                    <legend>Topic</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="topic" id="topicPHP" value="php">
                            PHP
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="topic" id="topicJS" value="js">
                            JS
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="topic" id="topicProgramming" value="programming">
                            programming
                        </label>
                    </div>

                </fieldset>
                <button type="submit" name="addNewPostSubmit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>


        <?php
        /* Ako je korisnik kliknuo na submit dugme za dodavanje posta. */
        if (isset($_GET['addNewPostSubmit'])) {

            /* Uspostavljamo konekciju sa MySQL serverom. */
            $connection = mysqli_connect('localhost', 'root', '', 'phpblog');
            if (mysqli_connect_errno()) {
                echo 'There is problem with connection: ' . mysqli_connect_error();
            } else {

                /* Promenljiva koja cuva informaciju o pojavi greske. */
                $error = false;

                $title = mysqli_real_escape_string($connection, $_GET['title']);
                $content = mysqli_real_escape_string($connection, $_GET['content']);
                $author = mysqli_real_escape_string($connection, $_GET['author']);

                /* Konstante koje ogranicavaju duzinu unosa. Kada naucimo da radimo sa 
                include direktivom ove kontatne cemo moci da izdvojimo u zaseban konfiguracioni fajl. */
                define("MAX_TITLE_LENGTH", 255);
                define("MAX_CONTENT_LENGTH", 10000);
                define("MAX_AUTHOR_LENGTH", 200);


                /* Provera naslova. */
                if (empty($title) || strlen($title)> MAX_TITLE_LENGTH) {
                    $error = true;
                }

                /* Provera sadrzaja. */
                if (empty($content) || strlen($content)> MAX_CONTENT_LENGTH) {
                    $error = true;
                }

                /* Provera imena autora. */
                if (empty($author) || strlen($author)> MAX_AUTHOR_LENGTH) {
                    $error = true;
                }

                /* Provera teme. */
                if (!isset($_GET['topic'])) {
                    $error = true;
                } else {
                    $topic = mysqli_real_escape_string($connection,  $_GET['topic']);
                    if ($topic != "php" && $topic != "js" && $topic != "programming") {
                        $error = true;
                    }
                }

                /* Ako je primecena greska u procesu validacije, ispisuje se poruka o gresci! */
                if ($error) {
                    echo "<div class='alert alert-dismissible alert-danger'>";
                    echo "<strong>Please, fill out the form correctly! </strong> ";
                    echo "</div>";
                } else {
                    /* Inace, dodaje se novi post. */

                    /* Formiramo insert upit kojim prosledjene podatke upisujemo u bazu. */
                    $query = "INSERT INTO posts (title, content, author, topic) VALUES ('$title', '$content', '$author', '$topic')";

                    /* Izvrsavamo upit. Rezultat izvrsavanja moze biti true ili false vrednost. */
                    $result = mysqli_query($connection, $query);

                    if ($result == false) {
                        /* Ako je rezultat false, doslo je do greske. */
                        echo "<div class='alert alert-dismissible alert-danger'>";
                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                        echo "<strong>Error with the query: </strong> " . mysqli_error($connection);
                        echo "<br>";
                        echo "<strong>Please try later! </strong>";
                        echo "</div>";
                    } else {
                        /* Ako je rezultat true, unos je uspesan. */
                        echo "<div class='alert alert-dismissible alert-secondary'>";
                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                        echo '<strong>Congrats! You have added a new post!</strong>';
                        echo "<br>";

                        /* Posebno, pomocu funkcije mysqli_insert_id dobijamo vrednost identifikatora koji 
                        je pridruzen novom postu i formiramo link koji vodi do njega. */
                        $post_id = mysqli_insert_id($connection);
                        echo "<a href='post.php?id=$post_id'>Click here to read </a>";

                        echo "</div>";
                    }
                }

                /* Zatvaramo konekciju. */
                mysqli_close($connection);
            }
        }
        ?>
    </div>
</body>

</html>