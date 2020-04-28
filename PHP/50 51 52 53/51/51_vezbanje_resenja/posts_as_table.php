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
        if (mysqli_connect_errno()) {
            /* Ako je doslo do greske, ispisujemo poruku o gresci.  Ispis greske je u procesu rada na aplikaciji 
            za nas vazan zbog lakseg pracenja. U produkciji, prventstveno iz bezbednosnih razloga, a potim i sa
            stanovista korisnickog iskustva, nije pozeljno ispisivati greske na ovaj nacin.*/
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
                /* Ako je sve u redu, ispisujemo postove u formi table. */

                /* Zapocinjemo stampanje table stampanjem otvarajuce <table> etikete. */
                echo "<table class='table table-hover'>";

                /* Zatim stampamo zaglavlje tabele. */
                echo "<tr>";
                echo "<th> Title </th> <th> Author </th> <th> Created at </th> <th> Topic </th>";
                echo "</tr>";

                /* U petlji stampamo pojedinacne redove tabele. */
                $number_of_posts = mysqli_num_rows($result);
                for ($i = 0; $i < $number_of_posts; $i++) {

                    /* Zapocinjemo red stampanjem otvarajuce <tr> etikete. */
                    echo "<tr>";

                    /* 
                    Za svaku od vrednosti koja opisuje post stampamo odgovarajucu celiju. 
                    Prvo stampamo otvarajucu <td> etiketu, zatim sadrzaj celije, a zatim i 
                    zatvarajucu etiketu </td>.
                    */

                    $post = mysqli_fetch_assoc($result);
                    echo "<td>" . $post['title'] . " </td> ";
                    echo "<td>" . $post['author'] . "</td> ";
                    echo "<td>" . $post['created_at'] . "</td>";
                    echo "<td>" . $post['topic'] . "</td>";

                    /* Zavrsavamo red stampanjem zatvarajuce </tr> etikete. */
                    echo "</tr>";
                }

                /* Zavrsavamo stampanje tabele stampanjem zatvarajuce </table> etikete. */
                echo "</table>";
            }

            /* Zatvaramo konekciju. */
            mysqli_close($connection);
        }
        ?>
    </div>
</body>

</html>