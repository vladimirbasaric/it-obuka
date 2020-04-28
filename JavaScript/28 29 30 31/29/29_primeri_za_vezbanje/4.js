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