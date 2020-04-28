// Napisati program ​​koji određuje najveći element u nizu i ispisuje njegovu vrednost.
// Primer: ako se zada niz​[23,51,-2,-13,8,7,-6]​ treba ispisati ​51.​

var niz = [23, 51, -2, -13, 88, 7, -6];

var maksimum = niz[0];
var i = 1;

while (i < niz.length) {
	if (niz[i] > maksimum) {
		maksimum = niz[i];
	}

	i++;
}

console.log(maksimum);