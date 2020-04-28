<?php

/*

Konstantni atributi

Konstanta je nalik promenljivoj jer cuva zadatu vrednost, ali je imutabilna, 
odnosno, jednom kad se deklarise, ne moze se menjati po vrednosti.
*/

class Knjiga {
   
    private $naslov;
    private $cena;
    // konstanta koja cuva naziv knjizare
    // ispred imena konstante se ne stavlja $ 
    // konstante su podrazumevano public
    const knjizara = "Laguna";

    // konstruktor sa dva argumenta 
    function __construct($naslov, $cena){
        $this->naslov = $naslov;
        $this->cena = $cena;
    }

    function getNaslov(){
        echo "Naslov knjige: ", $this->naslov;
    }
    function getCena(){
        echo "Cena po komadu: ", $this->cena;    
    }
    function getKnjizara(){
        // pristup konstantama - preko klase, a ne objekta
        // self referise na klasu u okviru koje se koristi 
        echo self::knjizara;
    }
    function podaci(){
        echo "Naslov: ".$this->naslov.", cena po komadu: ".$this->cena.".";
    }
    
}

$prvaKnjiga = new Knjiga("Mali princ",899);
// public konstanti se moze pristupiti preko imena klase
// sintaksa: ImeKlase :: ime_konstante
echo Knjiga::knjizara;
echo "<br>";
// ispis konstante preko getera koji se poziva nad objektom 
$prvaKnjiga->getKnjizara();
?>