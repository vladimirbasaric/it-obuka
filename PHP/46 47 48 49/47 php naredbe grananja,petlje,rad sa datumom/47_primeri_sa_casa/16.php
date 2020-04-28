<?php

/*

date(format, [timestamp]) -  vraca string koji je formatiran 
na osnovu string argumenta format koriscenjem trenutnog datuma i vremena
ili koriscenjem podataka iz drugog argumenta timestamp 

Pogledati u prilozenim tabelama specijalne karaktere za formatiranje.

*/

// d - dan u mesecu od 01 do 31
// m - mesec u godini od 01 do 12
// Y - godina na primer 2010, y - godina na dve cifre, na primer 99
// H - sat (24h), h - sat (12h) 
// i - minut sa vodecim nulama
echo date("d.m.Y. H:i");

?>
