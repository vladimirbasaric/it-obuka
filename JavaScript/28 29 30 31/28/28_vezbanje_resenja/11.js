// Napisati program koji u nizu četvorocifrenih brojeva nalazi element sa najvećom cifrom desetice.
// Ukoliko se u nizu nalazi više elemenata sa najvećom cifrom, ispisati poslednji.
// Primer: ako je zadat niz​[1223,-1250,-9893,5614,-9985,2007,6575] treba ispisati​ -9893​.
// Primer: ako je zadat niz​[5612,8820,-1924,5945,2037,6575] ​treba ispisati ​6575.

var niz = [1223, -1250, -9893, 5614, -9985, 2007, 6575];

console.log(najveca_desetica(niz));

function najveca_desetica(a) {
	// prvi element postavljamo za trenutni maksimum
	var max_element = a[0];

	/*
		Izdvajamo cifru desetice koriscenjem pomocne 
		funkcije. Cifra desetice nalazi se na poziciji 1.
	*/
	var max_desetica = izdvoji_cifru(a[0], 1);
	var i = 1;

	while (i < a.length) {
		var desetica = izdvoji_cifru(a[i], 1);

		if (desetica >= max_desetica) {
			max_desetica = desetica;
			max_element = a[i];
		}

		i++;
	}

	return max_element;
}


// pomocna funkcija za izdvajanje cifre na poziciji p
function izdvoji_cifru(x, p) {
	return Math.floor(Math.abs(x) / Math.pow(10, p)) % 10;
}