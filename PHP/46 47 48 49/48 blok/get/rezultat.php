<?php

/*
- _GET se koristi ukoliko je method povezivanja bio get
- u ovom slucaju se u URL adresu smestaju vrednosti, pa se stranica moze bukmarkovati
- svaka promenljiva se dohvata preko vrednosti atributa name
- umesto _GET se moze koristiti _REQUEST (zameniti i videti efekat)
*/

echo "Zovete se ".$_GET['ime']."<br>";
echo "Prezivate se ".$_GET['prezime'];

?>