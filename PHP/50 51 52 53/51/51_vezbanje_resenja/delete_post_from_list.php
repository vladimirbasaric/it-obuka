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

    <?php
    /* Uspostavljamo konekciju sa MySQL serverom. */
    $connection = mysqli_connect('localhost', 'root', '', 'phpblog');
    if (mysqli_connect_errno()) {
        echo "There is problem with connection: " . mysqli_connect_error();
        echo "</body></html>";
        exit();
    }
    ?>

    <!-- ToDo: Dodati navigaciju sa strane intro.php -->

    <div class='container'>
        <h1> Delete post </h1>

        <!-- U formularu cemo koristiti POST metod zbog bezbednosti i "restrikcije" prava brisanja. -->
        <form action="" method="POST">
            <fieldset>

                <div class="form-group">
                    <label for="post_id">Select post</label>
                    <select class="form-control" id="post_id" name="post_id">
                        <?php

                        /* Dohvatamo sve postove iz iz baze i na osnovu njih formiramo select listu. */
                        $query = "SELECT * from posts";
                        $result = mysqli_query($connection, $query);

                        while ($post = mysqli_fetch_assoc($result)) {
                            /* Pojedinacne stavke liste kao vrednost value atributa imaju identifikator posta, 
                            a kao sadrzaj naslove postova. */
                            echo "<option value='{$post['id']}'>{$post['title']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="deletePostSubmit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>

        <?php

        /* Pratimo da li je korisnik kliknuo na submit dugme za brisanje posta. */
        if (isset($_POST['deletePostSubmit'])) {

            /* Ako jeste, ocitavamo identifikator posta. */
            $post_id = mysqli_real_escape_string($connection, $_POST['post_id']);

            /* Formiramo delete upit. */
            $query = "DELETE FROM posts WHERE id=$post_id";

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
                /* Ako je rezultat true, brisanje je uspesno. */
                echo "<div class='alert alert-dismissible alert-secondary'>";
                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                echo '<strong>You have deleted the post successfuly!</strong>';
                echo "<br>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>

<?php
/* Zatvaramo konekciju. */
mysqli_close($connection);
?>

</html>