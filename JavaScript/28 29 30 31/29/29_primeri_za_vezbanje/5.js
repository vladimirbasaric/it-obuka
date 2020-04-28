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