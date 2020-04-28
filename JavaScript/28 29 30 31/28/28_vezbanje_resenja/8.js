// Napisati funkciju ​broj_cifara(x) ​koja vraća broj cifara broja ​x​.
// Zatim treba odrediti i ispisati prvu cifru u zapisu zadatog broja.
// Primer: ako se zada broj ​82901​ treba ispisati​ 8​.
// Primer: ako se zada broj ​-334562 ​treba ispisati ​3​.

var x = -2901;
var br = broj_cifara(x);

var prva_cifra = Math.floor(apsolutna_vrednost(x) / Math.pow(10, br - 1));

console.log(prva_cifra);

function broj_cifara(x) {
	var br = 0;

	x = apsolutna_vrednost(x);

	while (x != 0) {
		br++;
		x = Math.floor(x / 10);
	}

	return br;
}

function apsolutna_vrednost(x) {
	var abs = x < 0 ? -x : x;
	return abs;

	/*
		Primetimo da nije bilo potrebe da u ovom slucaju 
		pravimo posebnu promenljivu i u nju smestamo 
		vrednost izraza. Mogli smo uz return naredbu da 
		navedemo izraz cija bi vrednost bila izracunata a 
		onda i vracena iz funkcije:
		return x < 0 ? -x : x;
	*/
}