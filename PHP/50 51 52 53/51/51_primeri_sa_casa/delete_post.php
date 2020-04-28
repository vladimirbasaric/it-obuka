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
    
    <!-- Povratak na uvodnu stranu. -->
    <a href='intro.php' class="btn btn-primary">Back</a>
    
    <h1> Delete post </h1>

        <!-- U formularu cemo koristiti POST metod zbog bezbednosti i "restrikcije" prava brisanja. -->
        <form action="" method="POST">
            <fieldset>
                <div class="form-group">
                    <label for="post_id">Id</label>
                    <input type="text" class="form-control" id="post_id" name="post_id" placeholder="Enter post id"
                    <?php
                        /* Ovaj deo koda nam omogucava da ocuvamo unetu vrednost izmedju prikaza. */
                        if (isset($_POST['deletePostSubmit'])) {
                            /* Vrednost cuvamo tako sto, ako je zadat identifikator, formiramo i ispisujemo
                            value atribut sa odgovarajucom vrednoscu. */
                            $post_id = $_POST['post_id'];
                            echo "value = '{$_POST['post_id']}'";
                        }
                    ?>
                    
                    >
                </div>
                <button type="submit" name="deletePostSubmit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>

        <?php

        /* Pratimo da li je korisnik kliknuo na submit dugme za brisanje posta. */
        if (isset($_POST['deletePostSubmit'])) {

            /* Uspostavljamo konekciju sa MySQL serverom. */
            $connection = mysqli_connect('localhost', 'root', '', 'phpblog');
            if (mysqli_connect_errno()) {
                echo 'There is problem with connection: ' . mysqli_connect_error();
            } else {
                /* Ocitavamo identifikator posta. */
                $post_id = mysqli_real_escape_string($connection, $_POST['post_id']);

                /* 
                    Za vezbu: proveriti da li uneti id postoji u bazi. 
                    Brisanje nepostojeceg posta ce rezultirati sa true.
                */

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

                /* Zatvaramo konekciju. */
                mysqli_close($connection);
            }
        }
        ?>

    </div>
</body>

</html>