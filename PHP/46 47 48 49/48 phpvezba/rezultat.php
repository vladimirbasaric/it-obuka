<?php

$a = $_POST['a'];
$b = $_POST['b'];
if ($a == "" || $b == "") {
    echo "Niste uneli oba broja!";
    return;
}

if (!isset($_POST['o'])) {
    echo "Niste izabrali operaciju!";
    return;
}
$o = $_POST['o'];

if ($o == "+") {
    echo "Zbir je ".($a + $b).".";
} elseif ($o == "-") {
    echo "Razlika je ".($a - $b).".";
} elseif ($o == "*") {
    echo "Proizvod je ".($a * $b).".";
} else {
    if ($b == 0) {
        echo "Deljenje nulom!";
    } else {
        echo "Kolicnik je ".($a / $b).".";
    }
}

?>