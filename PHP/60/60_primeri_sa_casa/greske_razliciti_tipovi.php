<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP greške - tipovi grešaka</title>
</head>
<body>
<?php
    /* O podesavanjima rada PHP modula
    php.ini fajl je ime datoteke koja sadrzi sva podesavanja koja se odnose na izvrsavanje PHP koda u okviru
    Apache veb servera. Na primer, ova datoteka sadrzi podesavanje koje kaze gde treba cuvati PHP fajlove da bi
    mogli da se izvrsavaju, kolika je raspoloziva memorija za njihovo izvrsavanje, da li ce se potencijalne greske 
    u izvrsavanju prikazivati ili ne, kao i mnoga druga podesavanja. Ova podesavanja su globalnog tipa i odnose 
    se na izvrsavanje svih PHP skriptova. 
    */
    
    /* 
    Primer koji nadalje sledi se odnosi na tipove gresaka koje mogu da se jave prilikom izvrsavanja PHP skriptova.
    Ideja je da priblize kontekst pojavljivanja i nivo vaznosti. Neke greske su nivo zapazanja (eng. notice) ili 
    upozorenja (eng. warning) i nece prekinuti izvrsavanje samog programa vec skrenuti paznju korisniku (programeru)
    da mogu dovesti do potencijalno nezeljenih rezultata. Neke greske, tipa sintaksnih greski, su ozbiljne greske 
    koje ne dozvoljavaju da se kod izvrsi. Sa kodom moze biti sve u redu, ali, recimo, moze doci do greske u samom 
    modulu koji izvrsava PHP skriptove. Takve greske u imenu imaju CORE rec. Neke greske su vise u formi preporuka - 
    na primer, da su odredjene konstrukcije zastarele ili da nekompatibilne sa buducim verzijama. 

    Svaka od ovih gresaka je pridruzena konstanta (kod) koji je predstavlja. Na primer, E_NOTICE, E_WARNING, 
    E_DEPRICATED, E_

    Spisak svih konstanti je dostupan na:
    https://www.php.net/manual/en/errorfunc.constants.php
    */

    
    /* ini_set() funkcija
    ini_set je PHP funkcija koja omogucava lokalnu izmenu php.ini podesavanja tj. funkcija koja omogucava 
    da se zeljena svojstva odraze samo na izvrsavanje skriptova u kojima se nalaze. 
    */

    /*
    error_reporting je ime svojstva kojim se utice na tipove gresaka o kojima treba prikazivati obavestenja. 
    Njegova vrednost je kombinacija kodova koji odgovaraju greskama koje zelimo da pratimo. 
    */

    // podesavanje koje kaze da se bas sve greske prate
    ini_set('error_reporting', E_ALL);

    // skloniti komentar za vise primera 
    // znacenja operatora koji se koriste: & (znacenje i), | (znacenje ili), ~ (znacenje negacija)
    // ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // ini_set('error_reporting', E_ALL & ~E_WARNING);
    // ini_set('error_reporting', E_ALL & ~E_ERROR);

    // Primer greska tipa PHP notice (kod E_NOTICE)
    // $a = 5; 
    // uvecavanje promenljive koja prethodno nije inicijalizovana
    $a++;
    echo $a;

    // Primer greske tipa PHP warning (kod E_WARNING)
    // deljenje nulom
    // $n1 = 10;
    // $n2 = 0; 
    // echo $n1/$n2;

    // Primer greska u izvrsavanju (kod E_PARSE)
    // nedostaje ; nakon prve linije
    // echo "Hello "
    // echo "everyone!";


    /* 
    Mehanizam prijavljivanja i obrade PHP specificnih gresaka se moze primeniti i na greske koje su vazne
    za razvoj same aplikacije. Posto su ovo korisnicki (programerski) definisane greske, njih karakterisu 
    kodovi koji pocinju sa E_USER_  npr. E_USER_NOTICE, E_USER_WARNING, E_USER_ERROR. Koji od ovih kodova 
    ce se upotrebiti zavisi od korisnika i nivoa vaznosti greske. Ove greske se uvek prijavljuju funkcijom 
    trigger_error. 
    */

    /* Na primer, ako niska ne pocinje slovom "a", korisnik(programer) prijavljuje "malu" gresku tipa zapazanja
    koju prati odgovarajuca poruka. */
    $fruit = "orange";
    if ($fruit[0]!= "a"){
        trigger_error("Please consider fruits which name starts with a.", E_USER_NOTICE);
    }

?>
</body>
</html>