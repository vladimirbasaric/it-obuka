// Napisati funkciju ​pozicija(a,x) ​koja vraća poziciju broja ​x ​​u nizu ​a​.
// Ukoliko niz​ a ​ne sadrži broj​ x​,funkcija vraća ​-1​.
// Ukoliko se na više pozicija pojavljuje najveća cifra,vratiti prvu poziciju.
// Zatim treba pozvati funkciju i ispisati dobijenu vrednost.
// Primer: ako se zada niz​[23,51,-2,-13,8,7,-6]​ i broj​ 8 ​treba ispisati​ 4​.
// Primer: ako se zada niz​[23,8,-2,-13,8,7,-6] ​i broj​ 8 ​treba ispisati​ 1​.
// Primer: ako se zada niz​[23,51,-2,-13,8,7,-6]​ i broj​ 5​ treba ispisati​ -1​.

var niz = [23, 51, -2, -13, 8, 51, 7, -6];
var broj = 51;

console.log(pozicija(niz, broj));


function pozicija(a, x) {
	var i = 0;

	while (i < a.length) {
		/*
			Posto se trazi prva pozicija, mozemo vratiti i cim naidjemo na vrednost x. 
		*/
		if (a[i] == x) {
			return i;
		}

		i++;
	}

	return -1;
}