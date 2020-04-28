<?php
header('Content-Type: application/json');

$the_id = $_GET['id'];

$db = mysqli_connect('localhost', 'root', '', 'blok52');

if (mysqli_connect_errno()) {
    echo json_encode([
        msg => "Error connecting to database!",
    ]);
} else {
    $stmt = mysqli_prepare($db, "SELECT * FROM postovi WHERE id=?");

    /*
        Pravimo upit koji od korisnika prihvata jedan broj.
        i -> int
        d -> double
        s -> string
    */
    mysqli_stmt_bind_param($stmt, "i", $the_id);

    /* Izvrsavamo upit */
    mysqli_stmt_execute($stmt);

    /* Vezujemo rezultat izvrsenog upita u rezultat. */
    mysqli_stmt_bind_result($stmt, $result);

    /* Dohvatamo rezultat upita. */
    mysqli_stmt_fetch($stmt);

    /* Oslobadjamo objekat (ovo nije zatvaranje konekcije ka bazi).*/
    mysqli_stmt_close($stmt);

    /* Konstrisemo podatke koji se salju korisniku. */
    $data = [];
    while($row = $result->fetch_array()) {
        $data []= $row;
    }

    if ($result) {
        $data = [
            "msg" => "success",
            "content" => $data,
        ];
    } else {
        $data = [
            "msg" => 'Failed register! ' . mysqli_error($db),
        ];
    }

    /* Vracamo korisniku odgovor kao JSON sadrzaj. */
    echo json_encode($data);

    /* Zatvaramo konekciju. */
    mysqli_close($db);
}