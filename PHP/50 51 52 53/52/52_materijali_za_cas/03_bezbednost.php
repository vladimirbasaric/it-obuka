<?php
header('Content-Type: application/json');

$the_id = $_GET['id'];

$db = mysqli_connect('localhost', 'root', '', 'blok52');

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {
    // Konstruisemo upit
    $query = "SELECT * FROM postovi WHERE id=$the_id";

    // Izvrsavamo upit
    $result = mysqli_query($db, $query);

    $data = [];
    while($row = $result->fetch_array()) {
        // print_r($row);
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

    // Vracamo korisniku odgovor kao JSON sadrzaj.
    echo json_encode($data);

    // Zatvaramo konekciju
    mysqli_close($db);
}