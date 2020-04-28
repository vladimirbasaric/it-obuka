// Promenljive koje su deklarisane izvan funkcija nazivaju se globalne promenljive (eng. global variable).
// Promenljiva day je primer globalne promenljive.
// Skup svih globalnih promenljivih cini globalni imenski prostor (eng. global scope).
var day = 'Saturday';
console.log(day);



function sayHello(name) {
    // Promenljive koje su deklarisane u okviru funkcija zovu se lokalne promenljive (eng. local variable).
    // Promeljiva message je primer lokalne promenljive.
    // Skupu lokalnih promenljivih pridruzuju se i parametri funkcije.
    var message = 'Hello to ';
    console.log(message + name);
}
sayHello('all');



// Mala digresija o pozivu funkcije:
// Funkcija se poziva tako sto se navede ime funkcije i par zagradica () unutar kojih se navode stvarne vrednosti
// parametara (tzv. argumenti) medjusobno razdvojene zarezima. 
// Ukoliko se prilikom poziva funkcije navede vise argumenata nego sto je potrebno, visak argumenata se ignorise.
// Ukoliko se prilikom poziva funkcije navede manje argumenata nego sto je potrebno, nedostajuci parametri imaju vrednost undefined.
// Lista svih argumenata na nivou funkcije se moze dobiti pomocu arguments promenljive koja podrazumevano postoji. 
function test(a, n) {
    console.log(a, n);
    console.log(arguments);
}
test();
test(10);
test(10, 5);
test(10, 5, 8, 19);



// O preklapanju parametara i lokalnih promenljivih funkcije:
// U ovakvim scenarijima prednost se daje lokalnim promenljivama (tzv. shadowing).

// a je ime i parametra funkcije i lokalne promenljive funkcije test
function test(a, n) {
    var a = 10;
    console.log(a + n);
}

test(5, 8);

// Rezultat prethodnog fragmenta koda je 18.


// U funkcijama se mogu koristiti globalne promenljive. 

var n = 8;

function test(a) {
    // n koje se ovde pojavljuje je globalno n
    console.log(a + n);
}

test(5);

// Rezultat prethodnog fragmenta koda je 13.

// O preklapanju lokalnih i globalnih promenljivih:
// Ukoliko se na nivou funkcije preklope globalne i lokalne promenljive, prednost se daje lokalnim promenljivama. 

// n je i ime globalne promenljive i ime lokalne promenljive funkcije test
var n = 8;

function test(a) {
    var n = 12;
    console.log(a + n);
}

test(5);

// Rezultat prethodnog fragmenta koda je 17.


// Kao specijalan slucaj moze se razmotriti preklapanje globalnih promenljivih i parametara funkcije.  

// n je i ime globalne promenljive i ime parametra funkcije test
var n = 8;

function test(a, n) {
    console.log(a + n);
}

test(5, 10);

// Rezultat prethodnog fragmenta koda je 15.


// Zakljucak za poneti: 
// Prilikom izvrsavanja funkcije i odredjivanja vrednosti koriscene promenljive, promenljiva se 
// prvo trazi u skupu parametra, 
// zatim u skupu lokalnih promenljivih, 
// a potom u skupu globalnih promenljivih. 
// Pretraga se zaustavlja u trenutku kada se naidje na promenljivu trazenog imena.
// Ukoliko se promenljiva ne pronadje, izvrsavanje se prekida uz gresku tipa Reference Error.

// Ovaj nacin uvezivanja imenskih prostora pretrage se naziva lanac opsega (eng. scope chain). 
