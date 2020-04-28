// Napisati funkciju koja računa broj promena znaka u nizu.
// Primer: za zadati niz​[0,5,-1,15,60,-31,2]​ treba ispisati ​4​.
// Primer: za zadati niz​[780,52,1,95,62] ​treba ispisati​ 0​.

var niz = [0, 5, -1, 15, 60, -31, 2];

console.log(broj_promena(niz));

function broj_promena(a) {
	var brojac = 0;
	var i = 1;

	while (i < a.length) {
		if (a[i - 1] < 0 && a[i] > 0)
			brojac++;
		else if (a[i - 1] > 0 && a[i] < 0)
			brojac++;

		i++;
	}

	return brojac;
}