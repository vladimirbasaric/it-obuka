// Napisati funkciju ​obrni_nisku(s) ​koja vraća obrnutu nisku ​s​.
// Zatim treba pozvati funkciju i ispisati dobijenu vrednost.
// Primer: ako je zadata niska ​abcde​ treba ispisati ​edcba​.
// Primer: ako je zadata niska ​abcba ​treba ispisati ​abcba.​

var niska = "abcde";

console.log(obrni_nisku(niska));

function obrni_nisku(s) {
	var obrnuta = "";
	var i = s.length - 1;

	while (i >= 0) {
		obrnuta += s.charAt(i);
		i--;
	}

	return obrnuta;
}