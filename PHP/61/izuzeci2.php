<?php

// funkcija koja sadrzi izuzetak
function provera($broj) {
  if ($broj <= 1) {
    throw new Exception("Broj mora biti veci od 1");
  }
}

// poziv funkcije stavljamo u try block
// ako izbije izuzetak, izvrsavanje se prekida i prelazi se direktno u catch blok
try {
  provera(0.5);
  // ako se izbaci izuzetak, tekst ispod nikada nece biti prikazan
  echo 'Nema izuzetka, jer je broj veci od 1';
}

// catch blok koji hvata izuzetak i ispisuje odgovarajucu poruku
catch(Exception $izuzetak) {
  echo 'Poruka: ' .$izuzetak->getMessage();
}

?>