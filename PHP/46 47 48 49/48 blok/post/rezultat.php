<?php

/*
- _POST se koristi ukoliko je method povezivanja bio post
- u ovom slucaju se u URL adresu ne smestaju vrednosti
- izvrsavanje je efikasnije i bezbednije
- svaka promenljiva se dohvata preko vrednosti atributa name
- umesto _GET se moze koristiti _REQUEST (zameniti i videti efekat)
*/

echo "Zovete se ".$_POST['ime']."<br>";
echo "Prezivate se ".$_POST['prezime'];

?>