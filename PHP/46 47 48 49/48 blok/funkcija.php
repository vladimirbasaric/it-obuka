<!DOCTYPE html>

<html>

<head>
<title>Funkcija</title>
</head>

<body>

<h2>Funkcija</h2>

<?php

// ako se pozove sa jednim argumentom, podrazumeva se da je drugi 10
function proizvod($a, $b = 10) {
    $c = $a * $b;
    return $c;
}

echo "4 * 8 = ".proizvod(4, 8)."<br>";
echo "5 * 10 = ".proizvod(5)."<br>";

?>

</body>

</html>