<?php

/*

Primer koriscenja razlicitih prava pristupa za atribute

*/

class Knjiga {
   
    // naslovu se ne moze pristupiti izvan klase
    private $naslov;
    // ceni se moze pristupiti izvan klase
    public $cena;

    // konstruktor sa dva argumenta 
    function __construct($naslov, $cena){
        $this->naslov = $naslov;
        $this->cena = $cena;
    }

    // naredne metode se zovu geteri jer sluze za dobijanje 
    // vrednosti odredjenih atributa
    function getNaslov(){
        echo "Naslov knjige: ", $this->naslov;
    }
    function getCena(){
        echo "Cena po komadu: ", $this->cena;    
    }
}

$prvaKnjiga = new Knjiga("Mali princ",899);

// naredna linija koda bi dovela do greske 
// echo $prvaKnjiga->naslov;
// naslov se moze ispisati preko getera za njega
$prvaKnjiga->getNaslov();
echo "<br>";
// ceni se moze pristupiti direktno jer je public atribut
echo $prvaKnjiga->cena;
echo "<br>";
// a moze se koristiti i geter za cenu
$prvaKnjiga->getCena();
?>