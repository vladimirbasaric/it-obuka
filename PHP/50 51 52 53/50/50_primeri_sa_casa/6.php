<?php

/*

Static podaci i funkcije

Promenljivim i funkcijama koje su deklarisanje kao staticne, moze se
pristupati i kada jos uvek nije kreirana nijedna instanca te klase.

Staticnim promenljivim se ne moze pristupiti preko objekta klase, dok 
staticne metode mogu biti pozvane i nad objektom.

Podrazumevano su public ukoliko se ne navede drugacije.

*/

class Knjiga {
   
    private $naslov;
    private $cena;
    // static promenljiva koja cuva naziv knjizare
    // pravilo je da se takve promenljive inicijalizuju
    static $knjizara = "Laguna";

    // konstruktor sa dva argumenta 
    function __construct($naslov, $cena){
        $this->naslov = $naslov;
        $this->cena = $cena;
    }

    // static promenljivim se moze menjati vrednost
    // ovaj seter se poziva nad objektom 
    function setKnjizara($knjizara){
        self::$knjizara = $knjizara;
    }

    // static funkcija se moze pozvati i kad ne postoji objekat klase
    static function promeniKnjizaru($knjizara){
        // u okviru static funkcije ne moze se koristiti 
        // referenca this jer se funkcija moze pozvati
        // i kada ne postoji objekat klase
        self::$knjizara = $knjizara;
    }

    
}

// iako ne postoji instanca klase, moze se procitati podatak knjizara
echo Knjiga::$knjizara;
$knjiga = new Knjiga("Mali princ", 1000);
echo "<br>";
// promena preko nonstatic funkcije
$knjiga->setKnjizara("Vulkan");
echo Knjiga::$knjizara;
echo "<br>";
// promena preko static funkcije
Knjiga::promeniKnjizaru("Delfi");
echo Knjiga::$knjizara;
// static funkcija se moze pozivati i nad objektom klase
echo "<br>";
$knjiga->promeniKnjizaru("Laguna");
echo Knjiga::$knjizara;

?>