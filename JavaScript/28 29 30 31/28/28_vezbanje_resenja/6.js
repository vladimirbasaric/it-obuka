// Napisati program koji ispisuje sve elemente zadatog niza​ a​ koji sadrže zadatu cifru ​c​.
// Primer: ako je zadat niz​[1223,125,-983,564,-9985,20007,655] ​i cifra ​5 treba ispisati ​125 564 -9985 655​.

var niz = [1223, 125, -983, 564, -9985, 20007, 655];
var cifra = 5;

elementi_koji_sadrze_cifru(niz, cifra);

function elementi_koji_sadrze_cifru(a, c) {
	var i = 0;

	while (i < a.length) {
		if (sadrzi_cifru(a[i], c)) {
			console.log(a[i]);
		}

		i++;
	}
}

function sadrzi_cifru(broj, cifra) {
	broj = broj < 0 ? -broj : broj;

	while (broj != 0) {
		if (broj % 10 == cifra) {
			return true;
		}

		broj = Math.floor(broj / 10);
	}

	return false;
}