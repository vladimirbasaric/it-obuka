<?php

/*

Konstruktor - specijalna vrsta funkcije koja se poziva 
prilikom kreiranja objekta klase. Ukoliko nije definisan od 
strane korisnika, podrazumevani konstruktor sve atribute objekta 
inicijalizuje na NULL.

PHP uvodi specijalnu funkciju __construct() za definisanje konstruktora.
Ovoj funkciji se moze proslediti proizvoljan broj argumenata.

*/

class Knjiga {
   
    private $naslov;
    private $cena;

    // konstruktor sa dva argumenta 
    function __construct($naslov, $cena){
        // $this je specijalna promenljiva
        // koja referise na objekat koji se kreira
        // preko njega strelica notacijom pristupamo atributima objekta
        // obratiti paznju da se ispred naziva atributa ne navodi $
        $this->naslov = $naslov;
        $this->cena = $cena;
    }

    function podaci(){
        echo "Naslov knjige: ", $this->naslov, ", cena po komadu: ", $this->cena;    
    }
}

// kreiranje objekata klase Knjiga
// prosledjujemo vrednosti atributa
$prvaKnjiga = new Knjiga("Mali princ",899);
$drugaKnjiga = new Knjiga("Alhemicar",1200);

// pozivamo metod za ispis podataka
// metod se poziva nad objektor koristeci strelica notaciju
$prvaKnjiga->podaci();
echo "<br>";
$drugaKnjiga->podaci();

?>