<?php

$ulaz = fopen("meseci.txt", "r");
$izlaz = fopen("svakidrugi.txt", "w");

$i = 0;
while (!feof($ulaz)) {
  $mesec = fgets($ulaz);
  if ($i % 2 == 0) {
    fwrite($izlaz, $mesec);
  }
  $i += 1;
}

fclose($ulaz);
fclose($izlaz);

?>