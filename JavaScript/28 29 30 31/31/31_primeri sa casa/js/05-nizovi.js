// Nizovi su struktura podataka koja omogucava da
// skladistimo vise vrednosti u jednoj strukturi podataka.
var xs = [1, 2, 3, 4, 5];
console.log(xs);

// Citanje vrednosti niza:
console.log("Prvi element: " + xs[0]);
console.log("Poslednji element: " + xs[xs.length - 1]);

// Prolazak kroz niz
// Postoji vise nacina, evo najcescih:
console.log("for petlja:")
for (var i = 0; i < xs.length; i++) {
    console.log(xs[i]);
}

console.log(".forEach:")
// .forEach je preporuceno trenutno u svetu JS-a ukolio se koristi ES5.
// U zavisnosti od broja argumenata, funkcija ce prihvatiti razlicite vrednosti.
// 1 argument: element niza
// 2 argumenta: element niza i njegov indeks
// 3 argumenta: element niza, njegov indeks i referenca na niz iz kojeg je element uzet

// xs.forEach(function(item, index, array) {
//   console.log(item, index);
// });
// Na dalje cemo koristiti arrow funkcije.
xs.forEach((item, index, array) => {
  console.log(item, index);
});

// Najcesce zelimo da prodjemo kroz elemente...
console.log(".forEach(item => ...)")
xs.forEach(item => {
    console.log(item)
});

// Promena vrednosti niza
xs[0] = 200;
console.log("Nakon izmene xs[0] = 200");
xs.forEach(x => {
    console.log(x);
});

console.log("Neuspesno menjanje elemenata u nizu :)");
xs.forEach(x => {
    x = 100;
    console.log(x);
});
console.log(xs);

// Uprkos nasem menjanju promenjive x, nismo izmenili originale u nizu.
// Razlog za to je dobijanje KOPIJE originala iz niza (kopiraju se brojevi).
// Odnosno, ako je x referenca na objekat, onda dobijamo kopiju reference,
// tako da radimo nad ISTIM OBJEKTOM, pa ga mozemo izmeniti. Ali ukoliko
// je x primitivni tip (na primer broj), onda dobijamo kompletnu kopiju broja.

// Kako da izmenimo nas niz?
xs.forEach((x, index, xs) => {
    xs[i] = 100;
});
// Ili naravno:
for (var i = 0; i < xs.length; i++) {
    xs[i] = 100;
}
console.log(xs);

