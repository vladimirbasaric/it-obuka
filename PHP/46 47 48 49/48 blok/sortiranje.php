<!DOCTYPE html>

<html>

<head>
<title>Sortiranje niza</title>
</head>

<body>

<h2>Sortiranje niza</h2>

<?php

$brojevi = array(5, 1, 19, 7, 7, 5, 4263, 47, 14563, 10);

// ova funkcija sortira brojeve rastuce
// ovaj niz postaje: 1, 5, 5, 7, ..., 4263, 14563
sort($brojevi);

$duzina = count($brojevi);
for ($i = 0; $i < $duzina; $i++) {
    echo $brojevi[$i]." ";
}

?>

</body>

</html>