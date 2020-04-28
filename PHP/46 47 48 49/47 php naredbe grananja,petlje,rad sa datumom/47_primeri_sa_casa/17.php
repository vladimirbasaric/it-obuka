<?php


/*

pomocu mktime funkcije mozemo dobiti broj sekundi koji je prosao 
od 1.1.1970. do zadatog dana

mktime(sat, minut, sekund, mesec, dan, godina)

povratna vrednost mktime funkcije (takozvani timestamp podatak)
se prosledjuje kao drugi argument funkcije date koja onda moze da formatira
podatke u vezi dana koji je predstavljen datim brojem sekundi 

*/

/*

D - daje skracen naziv za dan u nedelji
l - daje pun naziv za dan u nedelji

*/
$timestamp = mktime(0,0,0,5,30,2019);
echo $timestamp, "<br>"; // broj sekundi od 1.1.1970. do zadatog dana
echo date("l",$timestamp);

?>