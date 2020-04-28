// Napisati funkciju​ kvadrat(x)​ koja računa kvadrat prosleđenog broja x.
// Zatim treba pozvati funkciju i ispisati dobijenu vrednost.
// Primer: ako se zada broj ​4​ treba ispisati ​16​.
// Primer: ako se zada broj​ -16​ treba ispisati ​256​.

var broj = -16;

console.log(kvadrat(broj));

function kvadrat(x) {
	return x * x;
}