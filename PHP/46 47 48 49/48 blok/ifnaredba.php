<!DOCTYPE html>

<html>

<head>
<title>If naredba</title>
</head>

<body>

<h2>If naredba</h2>

<?php

$vreme = 9;

echo "<p>Sada je ".$vreme." sati.</p>";

if ($vreme < 10) {
    echo "<p><b>Dobro jutro!</b></p>";
} elseif ($vreme < 18) {
    echo "<p><b>Doban dan!</b></p>";
} else {
    echo "<p><b>Dobro vece!</b></p>";
}

?>

</body>


</html>