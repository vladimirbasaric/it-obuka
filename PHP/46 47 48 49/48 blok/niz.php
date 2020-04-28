<!DOCTYPE html>

<html>

<head>
<title>Niz stringova</title>
</head>

<body>

<h2>Niz stringova</h2>

<?php

$teniseri = array("Novak Djokovic", "Rafael Nadal", "Roger Federer");
$duzina = count($teniseri);

for ($i = 0; $i < $duzina; $i++) {
    echo $teniseri[$i]."<br>";
}

?>

</body>

</html>