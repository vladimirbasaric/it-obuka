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