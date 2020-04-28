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