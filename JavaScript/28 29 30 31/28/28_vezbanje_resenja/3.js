// Napisati funkciju​ min(x,y) ​koja određuje minimum zadatih brojeva.
// Zatim treba pozvati funkciju i ispisati dobijenu vrednost.
// Primer: ako su zadati brojevi ​5 ​i ​-17 ​treba ispisati ​-17​.

var x = 18;
var y = -4;

console.log(minimum(x, y));

function minimum(x, y) {
	return x < y ? x : y;
}