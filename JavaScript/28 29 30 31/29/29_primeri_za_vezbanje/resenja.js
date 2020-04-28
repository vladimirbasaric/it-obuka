// 1.
// Napisati funkciju koja izračunava zbir svih svojih argumenata. 

// Na primer, poziv zbir(3, 4, 5) treba da vrati rezultat 12. 
// Na primer, poziv zbir(7, 8) treba da vrati rezultat 15. 
// Na primer, poziv zbir() treba da vrati rezultat 0.

function sumOfArguments() {
    /* Suma argumenata se inicijalno postavlja na 0. */
    var sum = 0;

    /* Svaka funkcija podrazumevano raspolaze arguments promenljivom u koju se smestaju svi argumenti
    nad kojima je funkcija pozvana. Npr. ako je poziv funkcije 
    sumOfArguments (3, 4, 5) arguments je niz [3, 4, 5]
    ili za 
    sumOfArguments (7, 8) arguments je niz [7, 8].
    */

    /* For petlja omogucava prolazak kroz niz arguments i ocitavanje pojedinacnih argumenata. */
    for (var i = 0; i < arguments.length; i++) {
        /* arguments[i] je i-ti argument u pozivu funkcije i njegova vrednost se dodaje ukupnoj sumi. */
        sum += arguments[i];
    }

    /* Funkcija vraca izracunatu sumu. */
    return sum;
}

console.log(sumOfArguments(3, 4, 5));
console.log(sumOfArguments(7, 8));
console.log(sumOfArguments());

// 2.
// Napisati funkciju koja radi sledeće: ukoliko joj se proslede dva broja ispisuje njihov zbir, 
// ukoliko joj se proslede dva stringa (niske) vraća njihovu konkatenaciju, 
// a u svim ostalim slučajevim ispisuje da argumenti nisu odgovarajućeg tipa. 

// Na primer, poziv plus(4, 5) ispisuje rezultat 9. 
// Na primer, poziv plus(‘lep’, ‘ dan’) ispisuje poruku ‘lep dan’.
// Na primer, poziv plus(4, ‘lep’) ispisuje poruku ‘Argumenti nisu odgovarajuceg tipa’.

function magicalPlus(firstValue, secondValue) {
    /* Prvo se proverava da li je funkcija pozvana sa dva argumenta. */
    if (arguments.length != 2) {
        /* Ako nije, ispisuje se odgovarajuca poruka i prekida se izvrsavanje funkcije. */
        console.log('Broj argumenata nije korektan!');
        return;
    }

    /* Ukoliko su oba argumenta brojevi, izracunava se i ispisuje njihov zbir. 
    Za proveru tipa promenljive koristi se operator typeof koji vraca ime tipa promenljive. */
    if (typeof firstValue == 'number' && typeof secondValue == 'number') {
        console.log(firstValue + secondValue);
    } else
        /* Ukoliko su oba argumenta niske, ispisuje se niska dobijena njihovim nadovezivanjem. */
        if (typeof firstValue == 'string' && typeof secondValue == 'string') {
            console.log(firstValue + secondValue);
        } else {
            /* U suprotnom se zakljucuje da argumenti nisu odgovarajuceg tipa. */
            console.log('Argumenti nisu odgovarajuceg tipa!');
        }
}

magicalPlus(4, 5);
magicalPlus('lep', 'dan');
magicalPlus(4, 'lep');

// 3.
// Napisati u obliku funkcijskog izraza funkciju koja rotira niz za jednu poziciju u desno. 
// Na primer, poziv funkcije nad nizom [2, 5, 8, 9] treba da vrati niz [9, 2, 5, 8]. 
// Na primer, poziv funkcije nad nizom [11, 9, 34, 2, 3] treba da vrati niz [3, 11, 9, 34, 2].

var rotate = function (array) {

    /* Cuva se vrednost poslednjeg elementa niza */
    var lastElement = array[array.length - 1];

    /* Ideja je pomeriti sve elemente niza pocevsi od pretposlednjeg za jednu poziciju u desno. 
    Pomeranje se moze izvrsiti tako sto ce se element sa pozicije npr. 0 prebaciti na poziciju 1, 
    element sa pozicije 1 prebaciti na poziciju 2, i sve tako redom dok se ne prebaci pretposlednji element 
    sa pozicije array.length-2 na poslednju poziciju array.length-1. Ova pomeranja ima smisla raditi od kraja
    ka pocetku kako se ne bi izgubile vrednosti elemenata koje treba prebaciti. Zato se brojac inicijalizuje 
    vrednoscu array.length-1 sa idejmo da se u svakoj narednoj iteraciji umanji za 1 i omoguci prelaz na element 
    koji mu prethodi. Poslednja dozvoljena vrednost brojaca i je 1. */
    for (var i = array.length - 1; i > 0; i--) {
        /* Element sa pozicije array.length-2 se prebacuje na poziciju array.length-1, ...,
        element sa pozicije 2 se prebacuje na poziciju 3, element sa pozicije 1 se prebacuje na poziciju 2, 
        a element sa pozicije 0 na poziciju 1. Zakljucak je da se element sa pozicije i-1 prebacuje na poziciju i. */
        array[i] = array[i - 1];
    }

    /* Na nultu poziciju u novom nizu prebacuje se sacuvani poslednji element niza. */
    array[0] = lastElement;

    /* Posto funkcije trajno menjaju nizove nad kojima se pozivaju (prenos po referenci), niz array ce 
    sacuvati sve izmene nakon poziva funkcije. */
}

var a = [11, 9, 34, 2, 3];
rotate(a);
console.log(a);

// 4.
// Napisati u obliku funkcijskog izraza funkciju koja spaja dva niza. 
// Na primer, za nizove [2, 4] i [3, 6, 7] rezultat je niz [2, 4, 3, 6, 7].

var joinArrays = function (firstArray, secondArray) {

    /* Rezultujuci niz je inicijalno prazan. */
    var resultArray = [];
    /* Brojac j cemo koristiti za oznacavanje indeksa u nizu resultArray. */
    var j = 0;

    /* Brojac i cemo koristiti za oznacavanje indeksa u nizovima firstArray i secondArray. */
    var i;

    /* Prvo prolazimo kroz elemente prvog niza i prepisujemo ih u rezultujuci niz. */
    for (i = 0; i < firstArray.length; i++) {
        resultArray[j] = firstArray[i];
        /* Brojac j azuriramo tako da sledeci element dolazi na odgovarajucu poziciju. */
        j++;
    }

    /* Potom prolazimo kroz elemente drugog niza i prepisujemo ih u rezultujuci niz. 
    Vrednost brojaca j nismo menjali nakon prethodne petlje tako da ce vrednost odgovarajuce pozicije j
    novog elementa u rezultujucem nizu ostati sacuvana. */
    for (i = 0; i < secondArray.length; i++) {
        resultArray[j] = secondArray[i];
        j++;
    }

    /* Funkcija vraca rezultujuci niz. */
    return resultArray;
}

var a = [2, 4];
var b = [3, 6, 7];
var c = joinArrays(a, b);
console.log(c);


// 5.
// Napisati u obliku funkcijskog izraza funkciju koja ukršta dva niza jednakih dužina. 
// Na primer, za nizove [2, 4, 6] i [3, 8, 9] rezultat je niz [2, 3, 4, 8, 6, 9]. 

var interweaveArrays = function (firstArray, secondArray) {
    /* Rezultujuci niz je inicijalno prazan. */
    var resultArray = [];

    /* U petlji se koristi brojac i sa ciljem da predstavlja indekse elemenata prvog i drugog niza. 
    Ovo je moguce jer su nizovi jednakih duzina. */
    for (var i = 0; i < firstArray.length; i++) {
        /* Elementi prvog niza se smestaju na parne pozicije u rezultujucem nizu, npr. element sa pozicije 
        0 se smesta na poziciju 0, element sa pozicije 1 se smesta na poziciju 2, element sa pozicije 2 se 
        smesta na poziciju 4, ... */
        resultArray[2 * i] = firstArray[i];

        /* Elementi drugog niza se smestaju na neparne pozicije u rezultujucem nizu, npr. element sa pozicije 
        0 se smesta na poziciju 1, element sa pozicije 1 se smesta na poziciju 3, element sa pozicije 2 se 
        smesta na poziciju 5, ... */
        resultArray[2 * i + 1] = secondArray[i];
    }

    /* Funkcija vraca rezultujuci niz. */
    return resultArray;
}

var a = [2, 4, 6];
var b = [3, 8, 9];
var c = interweaveArrays(a, b);
console.log(c);


//6
// Napisati u obliku funkcijskog izraza funkciju koja prebrojava cifre veće od 5 u zadatoj niski. 
// Na primer, za nisku “ab48cd861” rezultat je 3. 
// Smernica: prvo napisati funkciju koja proverava da li je karakter cifra, a zatim je iskoristiti u pisanju tražene funkcije. 

var isDigit = function (s) {

    /* Rezultat rada funkcije. */
    var result;

    /* Zbog prebglednosti, za analizu vrednosti prosledjene niske s mozemo koristiti switch naredbu. */
    switch (s) {
        case "0":
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
            /* Ukoliko je vrednost niske s neka od cifara, rezultat je true vrednost. */
            result = true;
            /* U ovom trenutku se prekida izvrsavanje switch naredbe. */
            break;
        default:
            /* Ukoliko vrednost niske s nije neka od cifara, rezultat je false vrednost. */
            result = false;
    }

    /* Funkcija vraca izracunatu vrednost. */
    return result;
};


// var isDigit = function (s) {

//     /* Niska koja sadrzi sve cifre. */
//     var digits = "0123456789";

//     /* Provera da li je prosledjena niska s cifra moze se izvrsiti pomocu ugradjene JavaScript funkcije indexOf.
//     Funkcija indexOf proverava da li se proslednjena niska nalazi u niski koja je poziva. Na primer, 
//     "abc".indexOf("b") proverava da li se niska "b" nalazi u niski "abc", 
//     s.indexOf("mmm") proverava da li se niska "mmm" nalazi u niski s. 
//     Povratna vrednost funkcije je broj -1 ukoliko se trazena niska ne nalazi u niski koja je poziva ili pozicija 
//     na kojoj se nalazi.  Na primer, 
//     "abc".indexOf("b") daje rezultat 1
//     "abcdef".indexOf("e") daje rezultat 4
//     "abcdef".indexOf("me") daje rezultat -1 */

//     /* Ako se prosledjena niska s nalazi u niski cifara, indexOf() funkcija ce vratiti vrednost razlicitu od -1. */
//     if (digits.indexOf(s) != -1) {
//         return true;
//     }

//     /* U suprotnom, mozemo zakljuciti da niska s nije cifra. */
//     return false;
// };


var countDigits = function (s) {

    /* Brojac cifara se inicijalno postavlja na 0. */
    var counter = 0;

    /* U petlji se obilaze karakteri niske. */
    for (var i = 0; i < s.length; i++) {
        /* Ako je tekuci karakter cifra i to cifra veca od 5 */
        if (isDigit(s[i]) && s[i] > 5) {
            /* Uvecavamo brojac za 1. */
            counter++;
        }
    }

    /* Funkcija vraca vrednost brojaca cifara. */
    return counter;
}

var s = "ab48cd861";
var n = countDigits(s);
console.log(n);