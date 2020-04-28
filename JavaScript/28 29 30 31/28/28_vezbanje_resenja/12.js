// Napisati program koji proverava da li je niz neopadajući.
// Primer: ako se zada niz​[3,6,9,89,100] ​treba ispisati‚‚​Niz je neopadajuci​’’.
// Primer: ako se zada niz​[3,6,6,89] ​treba ispisati ‚‚​Niz je neopadajuci​’’. 
// Na primer, ako se zada niz​[5,9,2,11]​ treba ispisati‚‚​Niz nije neopadajuci​’’

var niz = [3, 6, 6, 89, 100];

console.log(neopadajuci(niz) ? "Niz je neopadajuci." : "Niz nije neopadajuci.");

function neopadajuci(a) {
	var i = 1;

	while (i < a.length) {
		if (a[i - 1] > a[i]) {
			return false;
		}

		i++;
	}

	return true;
}