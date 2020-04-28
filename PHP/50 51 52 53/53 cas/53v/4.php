<?php

require 'nizovi.php';

$ulaz = fopen('niz.txt', 'r');
$meseci = [];
while (!feof($ulaz)) {
  $mesec = fgets($ulaz);
  array_push($meseci, (int)$mesec);
}
fclose($ulaz);

echo "Niz:<br>";

echo "<ul>";
foreach ($meseci as $mesec) {
  echo "<li>".$mesec."</li>";
}
echo "</ul>";

echo "Rezultati racunanja:<br>";

echo "<ul>";
echo "<li>Najveci: ".najveci($meseci)."</li>";
echo "<li>Najmanji: ".najmanji($meseci)."</li>";
echo "<li>Prosecni: ".prosecni($meseci)."</li>";
echo "</ul>";

?>