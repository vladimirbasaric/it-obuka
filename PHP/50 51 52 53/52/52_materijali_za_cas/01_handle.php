<?php

// Izvlace se informacije koje je korisnik prosledio.
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);
$email = $_POST['email'];

if (isset($_POST['subscribed'])) {
    $subscribed = 1;
} else {
    $subscribed = 0;
}

$db = mysqli_connect('localhost', 'root', 'kazivanje430', '');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ishod registracije</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1>Registration status</h1>
        <?php
        if (mysqli_connect_errno()) {
            echo mysqli_connect_error();
        } else {
            // Konstruisemo upit
            $query = "INSERT INTO korisnici (username, password, email, subscribed) VALUES ('$username', '$password', '$email', $subscribed)";

            // Izvrsavamo upit
            $result = mysqli_query($db, $query);

            $class_for_bootstrap = 'bg-';
            if ($result) {
                $class_for_bootstrap .= 'success';
                $title = "Success";
                $content = "Congratulations for your registration!";
            } else {
                $class_for_bootstrap .= 'danger';
                $title = "Failed";
                $content = "We are sorry, but you registration has failed!";
            }

        }
        ?>

        <div class="card text-white <?php echo $class_for_bootstrap; ?> mb-3" style="max-width: 18rem;">
            <div class="card-header">Status</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $title; ?></h5>
                <p class="card-text"><?php echo $content; ?></p>
            </div>
        </div>

        <h4>Ovo korisnik ne treba da vidi :)</h4>
        <div class='row'>
            <div style='border: 1px solid black' class='col-md-12'>
                <pre>
                    <?php
                        // Proveravamo ishod u rezultat prikazujemo u <pre> elementu.
                        // Ovo NE treba raditi, korisnici ne treba da vide ispis iz sistema za baze podataka.
                        // Ovde je dodato radi vezbanja :)
                        if ($result) {
                            echo 'Successful register!';
                        } else {
                            echo 'Failed register! ' . mysqli_error($db);
                        }

                    // Zatvaramo konekciju
                    mysqli_close($db);

                    // Prikazujemo $_POST niz
                    echo '<br>Sadrzaj $_POST niza<br>';
                    print_r($_POST);
                    ?>
                </pre>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>
