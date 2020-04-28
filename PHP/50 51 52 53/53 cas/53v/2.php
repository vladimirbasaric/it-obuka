<?php

$ulaz = fopen("meseci.txt", "r");
$izlaz = fopen("sadrzea.txt", "w");

while (!feof($ulaz)) {
  $mesec = fgets($ulaz);
  if (strpos($mesec, "a") !== false) {
    fwrite($izlaz, $mesec);
  }
}

fclose($ulaz);
fclose($izlaz);

?>