<?php

/*

Metode za azuriranje atributa - seteri.

*/

class Knjiga {
   
    private $naslov;
    private $cena;

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

    // naredne metode se zovu seteri jer sluze za postavljanje 
    // novih vrednosti odredjenim atributima
    // podrazumevano imaju argument - novu vrednost za atribut
    function setNaslov($naslov){
        $this->naslov = $naslov;
        
    }
    function setCena($cena){
        $this->cena = $cena;
        
    }
    function podaci(){
        echo "Naslov: ".$this->naslov.", cena po komadu: ".$this->cena.".";
    }
    
}

$prvaKnjiga = new Knjiga("Mali princ",899);
$prvaKnjiga->podaci();
// prosledjujemo novu cenu
$prvaKnjiga->setCena(1200);
echo "<br>Podaci nakon izmene cene <br>";
$prvaKnjiga->podaci();
?>