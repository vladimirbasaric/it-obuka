function generateNumbers(n) {
    // Funkcija vraca niz duzine 'n', tako da je:
    // element 0: 100
    // element 1: 200
    // ...
    // element k: k*100
    // TODO
    return [];
}

function findMax(xs) {
    // Funkcija vraca maksimum (najveci element) iz niza 'xs'.
    // TODO
    return 0;
}

function reverseArray(xs) {
    // Funkcija vraca novi niz iste duzine u kojem su elementi
    // iz niza 'xs' ali u obrnutom poretku.
    // TODO;
    return [];
}

function swapElements(xs, i, j) {
    // Kopiramo niz xs
    ys = xs.slice();

    // Funkcija vrsi razmenu elemenata niza 'xs' koji se nalaze
    // na indeksima 'i' i 'j'. Funkcija vraca azurirani niz 'ys'
    // (ne menjati 'xs').
    // Ukoliko su prosledjeni losi indeksi (< 0 ili >= xs.length), ne raditi nista.

    // TODO

    return ys;
}

console.log("generateNumbers");
console.log(generateNumbers(0).toString() === [].toString());
console.log(generateNumbers(1).toString() === [100].toString());
console.log(generateNumbers(5).toString() === [100, 200, 300, 400, 500].toString());

console.log("\nfindMax");
console.log(findMax([]) === undefined);
console.log(findMax([100, 2, 3]) === 100);
console.log(findMax([1, 200, 3]) === 200);
console.log(findMax([1, 2, 300]) === 300);

console.log("\nreverseArray");
console.log(reverseArray([]).toString() === [].toString());
console.log(reverseArray([1]) === [1].toString());
console.log(reverseArray([100, 2, 3]).toString() === [3, 2, 100].toString());

console.log("\nswapElements");
console.log(swapElements([1, 2, 3], 0, 2).toString() === [3, 2, 1].toString());
console.log(swapElements([1, 2, 3], 0, 0).toString() === [1, 2, 3].toString());
console.log(swapElements([1, 2, 3], 100, 2).toString() === [1, 2, 3].toString());
console.log(swapElements([1, 2, 3], 1, 200).toString() === [1, 2, 3].toString());
console.log(swapElements([1, 2, 3], 100, 200).toString() === [1, 2, 3].toString());