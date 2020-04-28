<?php

$ulaz = fopen("meseci.txt", "r");
$meseci = [];
while (!feof($ulaz)) {
  $mesec = fgets($ulaz);
  array_push($meseci, $mesec);
}
fclose($ulaz);

$izlaz = fopen("meseci.txt", "w");
foreach ($meseci as $mesec) {
  if (strlen($mesec) <= 5 + 2) {
    fwrite($izlaz, $mesec);
  }
}
fclose($izlaz);

?>