<?php

// funkcija koja sadrzi izuzetak
function provera($broj) {
  if ($broj <= 1) {
    throw new Exception("Broj mora biti veci od 1");
  }
}

// poziv funkcije (izbacice se izuzetak)
provera(0.5);

?>