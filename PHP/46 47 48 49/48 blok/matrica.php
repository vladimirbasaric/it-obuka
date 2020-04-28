<html>

<head>
<title>Matrica</title>
</head>

<body>

<h2>Matrica</h2>

<?php

// matrica se zadaje kao niz nizova
$matrica = array(
    array(2, 3, 1, 7),
    array(6, 5, 6, 9),
    array(8, 4, 6, 3)
);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        // ispisuje se kao dvodimenzionalni niz
        echo $matrica[$i][$j]." ";
    }
    echo "<br>";
}

?>

</body>

</html>