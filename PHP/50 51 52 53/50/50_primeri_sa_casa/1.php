<?php

/*

Klasa - korisnicki definisan tip podataka koji sadrzi neke podatke i funkcije

Objekat - instanca konkretne klase. Klasa se definise jednom, 
a moze se kreirati proizvodljan broj objekata (instanci) iste klase.

Clanice podaci - promenljive podaci definisane u okviru klase.
Ove promenljive se zovu jos i atributi ili svojstva kreiranog objekta.

Clanice funkcije - funkcije definisane u okviru klase koje mogu pristupiti
podacima. Ove funkcije se nazivaju jos i metodima klase.

Sintaksa za definiciju klase:

class Ime_Klase{
    // definicija funkcija i podataka 
}

*/

// Klasa knjige koja sadrzi podatke o naslovu i ceni 

class Knjiga {
    /* definicija atributa i prava pristupa

        atributi se uvode koriscenjem jedne od kljucnih reci:
        public, private, protected za kojim sledi naziv atributa.

        public - atribut je javan, tj. moze mu se pristupiti i izvan 
            definicije klase
        protected - atribut je zasticen, tj. moze mu se pristupiti 
         u okviru definicije klase ili iz nasledjenih klasa 
        private - atributu se moze pristupiti samo u okviru definicije klase
            tj. od strane metoda klase

        Iste kljucne reci se mogu koristiti za oznacavanje prava 
        pristupa metoda klase.

    */
    
    private $naslov;
    private $cena;

    // metod za ispisivanje naslova i cene knjige
    // podrazumevano je sve public ukoliko se ne oznaci drugacije
    // iako su atributi oznaceni kao privatni
    // metod podaci moze da im pristupa
    function podaci(){
        // $this je specijalna promenljiva
        // koja referise na objekat nad kojim se pozvao metod
        // preko njega strelica notacijom pristupamo atributima objekta
        // obratiti paznju da se ispred naziva atributa ne navodi $
        echo "Naslov: ".$this->naslov.", cena po komadu: ".$this->cena.".";
    }
}

// kreiranje objekata klase Knjige
// operator new za kojim sledi naziv klase
$prvaKnjiga = new Knjiga;
// novi objekat je potpuno nezavisan od prvog 
// i ima svoje lokalne atribute naslov i cena
$drugaKnjiga = new Knjiga;

// atributi ce biti podrazumevano NULL 
echo var_dump($prvaKnjiga);
echo "<br>";
echo var_dump($drugaKnjiga);
echo "<br>";
// poziv metoda, NULL se ne prikazu na izlazu  
$prvaKnjiga->podaci();

?>