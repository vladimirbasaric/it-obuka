// Napisati funkciju​ prebroj(a,x) ​koja broji koliko puta se pojavljuje broj x​ u nizu ​a​.
// Zatim treba pozvati funkciju i ispisati dobijenu vrednost.
// Primer: za zadati niz​[1,42,42,15,10,42,0,2] ​i broj​ 42 ​treba ispisati ​3​. 
// Primer: za zadati niz​[1,15,10,0,2]​ i broj​ 3 ​treba ispisati ​0​.

var a = [1, 42, 42, 15, 10, 42, 0, 2];
var x = 42;

console.log(prebroj(a, x));

function prebroj(niz, broj) {
	var brojac = 0,
		i = 0;

	while (i < niz.length) {
		if (niz[i] === broj) {
			brojac++;
		}
		i++;
	}
	return brojac;
}
// moje resenje, moze i ovako
// let niz = [1, 42, 42, 15, 10, 42, 0, 2];
// let broj = 42;

// function prebroj(a, x) {
// 	let brojac = 0;
// 	for (let i = 0; i < a.length; i++) {
// 		if (a[i] == x) {
// 			brojac = brojac + 1; // brojac++;
// 		}
// 	}
// 	return brojac;
// }

// console.log(prebroj(niz, broj));