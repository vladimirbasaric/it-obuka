// Napisati program koji za zadati ceo broj ispisuje broj pojavljivanja svake od cifara u zapisu tog broja.
// Uputstvo:​ Za evidenciju broja pojavljivanja svake cifre pojedinačno, koristiti niz.
// Primer: za zadati broj ​2256926​ treba ispisati ​2:3 5:1 6:2 9:1​.
// Primer: za zadati broj ​-555555​ trebaispisati ​5:6​.

var broj = -2256926;
var cifre = ponavljanja_cifara(broj);
var i = 0;

while (i < cifre.length) {
	if (cifre[i] != 0)
		console.log(i + " : " + cifre[i]);

	i++;
}


function ponavljanja_cifara(x) {
	var ponavljanja = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	x = x < 0 ? -x : x;

	while (x != 0) {
		var cifra = x % 10;
		ponavljanja[cifra]++;
		x = Math.floor(x / 10);
	}

	return ponavljanja;
}