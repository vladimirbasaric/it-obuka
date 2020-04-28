<?php

/*

Nasledjivanje klasa - omogucava da se iskoristi kod i vec implementirana 
funkcionalnost koju treba prosiriti nekim dodatnim svojstvima ili metodima.

Na primer, iz klase Student koja predtsvalja studenta i 
sadrzi atribute ime i prezime se moze izvesti (naslediti) 
klasa MathStudent koja predstavlja studenta sa Matematickog fakulteta
sa dodatnim atributima i svojstvima.

U ovom primeru klasu Student nazivamo roditeljskom, a klasu MathStudent 
klasom dete ili izvedenom klasom.

*/

class Student {
    
    function __construct($ime, $prezime) {
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    function podaci() {
        echo "Student: " . $this->ime . " " . $this->prezime . "<br>";
    }
}

$student = new Student("Marko","Petrovic");
$student->podaci();

// nasledjivanje klase: ImeKlase extends ImeNasledjeneKlase
// MathStudent nasledjuje sve atribute i funkcije iz klase Student
// koje nisu deklarisane kao private 
class MathStudent extends Student {
    // klasa dete moze imati dodatne metode i atribute
    private $indeks;
    // ukoliko se ne definise konstruktor za klasu MathStudent
    // podrazumevano se poziva konstruktor nadklase
    function __construct($ime, $prezime,$indeks){
        // u okviru konstruktora za potklasu pozivamo 
        // konstruktor nadklase i prosledjujemo vrednosti 
        // za nasledjene atribute
        Student::__construct($ime, $prezime);
        // dodatno, postavljamo vrednosti novih atributa
        $this->indeks = $indeks;

    }
    // ukoliko se uvede metod sa istim imenom iz nadklase
    // njegova definicija ce prekopirati definiciju iz nadklase
    function podaci() {
        echo "Student sa Matematickog fakulteta: " . $this->ime . " " . $this->prezime .", indeks ". $this->indeks . "<br>";
    }
}

$mathStudent = new MathStudent("Milena","Petrovic","100/2019");
$mathStudent->podaci();

?>