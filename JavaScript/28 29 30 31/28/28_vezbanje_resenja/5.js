// Napisati program koji proverava da li je zadata niska palindrom.
// Primer: ako je zadata niska ​radar ​treba ispisati ​Da​.
// Primer: ako je zadata niska ​dabar ​treba ispisati​ Ne​.

var niska = "radar";

console.log(palindrom(niska) ? "Da" : "Ne");

function palindrom(s) {
	var i = 0,
		j = s.length - 1;

	while (i < j) {
		/* 
			Ukoliko nadjemo na nepoklapanje bar na jednoj 
			poziciji onda niska sigurno nije palindrom i 
			dalje ne moramo da proveravamo ostale pozicije. 
			Mozemo prekinuti petlju i vratiti odgovarajucu 
			vrednost. 

			Naredbom return mozemo da skratimo posao - ona 
			prekida izvrsavanje funkcije pa i same petlje.
		*/
		if (s[i] != s[j]) {
			return false;
		}

		i++;
		j--;
	}

	/* 
		Nakon petlje, ukoliko funkcija nije prekinuta, 
		znaci da nismo nasli neslaganja tj. da niska jeste 
		palindrom pa vracamo true iz funkcije.
	*/
	return true;
}