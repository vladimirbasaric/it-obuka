// Napisati program koji određuje poziciju najveće cifre u zapisu zadatog broja.
// Ukoliko se na više pozicija pojavljuje najveća cifra, vratiti poslednju poziciju gledano s desna na levo.
// Primer: ako se zada broj​ 82901 ​treba ispisati ​2​.
// Primer: ako se zada broj​ -331032​ treba ispisati​ 5​.
// Primer: ako se zada broj​ 2222 ​treba ispisati ​3​.

var broj = -331032;

console.log(pozicija_najvece_cifre(broj));

function pozicija_najvece_cifre(x) {
	var cifra;
	var pozicija = -1;
	var max_cifra = -1;
	var max_pozicija = -1;


	x = x < 0 ? -x : x;

	while (x != 0) {
		cifra = x % 10;
		pozicija++;

		if (max_cifra <= cifra) {
			max_cifra = cifra;
			max_pozicija = pozicija;
		}

		x = Math.floor(x / 10);
	}

	return max_pozicija;
}