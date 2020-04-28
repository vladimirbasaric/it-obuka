/* PODSECANJE NA OBJEKTE */

/* Kreiranje objekta koriscenjem literal notacije. */
var coffee = {
    type: 'latte',
    isWarm: true,
    sugar: 2
};

/* Pristup svojstvima objekta: ime_objekta.ime_svojsta. Ukoliko se pristupa nepostojecem svojstvu, 
rezultat je undefined. */
console.log(coffee.isWarm);
console.log(coffee.price);

/* Objekti su prosirivi tj. mogu im se dodavati nova svojstva. */
//coffee.milk = true;

/* Takodje, mogu se brisati postojeca svojstva objekata. U te svrhe se koristi operator delete. */
//delete coffee.sugar;

console.log(coffee);

/* Kreiranje objekata koriscenjem konstruktor funkcije. */
function Coffee(coffeeType, isWarm, sugar) {
    
    // U toku kreiranja, objekat koji se pravi se zove this.
    // podrazumevani korak: 
    // var this = {}

    this.type = coffeeType;
    this.isWarm = isWarm;
    this.sugar = sugar;

    this.print = function () {
        console.log(this.type, this.isWarm, this.sugar);
    }

    // podrazumevani korak: 
    // return this; 
}

/* Pozivu konstruktor funkcije prethodi operator new.  */
var ourCoffee = new Coffee('latte', false, 2);
ourCoffee.print();

/* Ukoliko se konstruktor funkcija pozove kao obicna funkcija, rezultat je undefined. */
// var ourCoffee = Coffee('latte', false, 2);
// console.log(ourCoffee);


/* O POREDJENU NIZOVA I OBJEKATA */

/* I nizovi i objekti se porede po referencama - adresama pocetka u memoriji. */
console.log([1, 2, 3] == [1, 2, 3]);

var obj1 = {
    x: 5,
    y: 10
};

var obj2 = {
    x: 5,
    y: 10
};

var obj3;

// U promenljivu obj3 ne kopira vrednost promenljive obj1 vec se postavlja da 
// promenljiva obj3 ukazuje na obj1 objekat. Graficki: obj3 --> obj1 
obj3 = obj1;

console.log(obj1 == obj2);

// Zbog postojanja referenci, ovaj izraz ce imati vrednost true.
console.log(obj1 == obj3);

/* I nizovi i objekti se prenose u funkcijama po referenci. Prilikom poziva funkcije se nikada ne vrsi 
njihovo kopiranje, ponasanje koji vazi u slucaju primitivnih tipova.  Zbog toga su sve izmene nad nizovima ili 
objektima unutar funkcije vidljive i nakon zavrsetka funkcije. */


function change(n) {
    // za primitivne tipove, prilikom prosledjivanja argumenata vrsi se kopiranje vrednosti
    // n <-- 5
    n = n + 1;
    // n ima vrednost 6 ali ova vrednost nije vidljiva izvan funkcije 
}
var a = 5;
change(a);
console.log(a);

function change(array) {
    // za nizove i objekte se formiraju reference
    // array --> [4, 5, 6] 
    array.push(7);
    // ovo dodavanje elementa na kraj niza ce biti trajno 
}
var a = [4, 5, 6];
change(a);
console.log(a);

/* O FUNKCIJAMA ARGUMENTIMA DRUGIH FUNKCIJA (tzv. callback funkcijama) */

/* Funkcija koja uvecava elemente niza za 1. */
function addOne(array) {
    for (var i = 0; i < array.length; i++) {
        array[i] = array[i] + 1;
    }
}

var a = [2, 9, 30, 4];
addOne(a);
console.log(a);

/* Funkcija koja duplira elemente niza. */
function double(array) {
    for (var i = 0; i < array.length; i++) {
        array[i] = array[i] * 2;
    }
}

var a = [2, 9, 30, 4];
double(a);
console.log(a);

/* Prethodne dve funkcije se razlikuju samo po kreiranja nove vrednosti: array[i]+1 i array[i]*2. 
Zato je motivacija da definisemo funkciju koja ce raditi primarni posao obilaska niza 
(u opstem slucaju neki zahtevniji posao) i koja ce kao argument primati funkciju koja 
naznacava zeljenu transformaciju. */

function change(array, f) {
    for (var i = 0; i < array.length; i++) {
        array[i] = f(array[i]);
    }
}

/* Funkcija koja uvecava za 1 vrednost zadatog broja. */
function addOneHelpper(n) {
    return n + 1;
}
/* Poziv change() funkcije sa addOneHelpper() funkcijom kao argumentom je ekvivalentan pozivu funkcije addOne() */
change(a, addOneHelpper);

/* Funkcija koja duplira vrednost zadatog broja. */
function doubleHelpper(n) {
    return n *2;
}

/* Poziv change() funkcije sa doubleHelpper() funkcijom kao argumentom je ekvivalentan pozivu funkcije double() */
change(a, doubleHelpper);
