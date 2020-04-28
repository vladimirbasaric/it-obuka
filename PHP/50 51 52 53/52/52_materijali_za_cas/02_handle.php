<?php
header('Content-Type: application/json');
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

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {
    // Konstruisemo upit
    $query = "INSERT INTO korisnici (username, password, email, subscribed) VALUES ('$username', '$password', '$email', '$subscribed')";

    // Izvrsavamo upit
    $result = mysqli_query($db, $query);

    $data = "";
    if ($result) {
        $data = [
            "msg" => "Successful register",
        ];
    } else {
        $data = [
            "msg" => 'Failed register! ' . mysqli_error($db),
        ];
    }

    // Vracamo korisniku odgovor kao JSON sadrzaj.
    echo json_encode($data);

    // Zatvaramo konekciju
    mysqli_close($db);
}