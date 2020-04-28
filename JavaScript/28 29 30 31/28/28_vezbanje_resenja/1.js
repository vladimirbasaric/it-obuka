//Napisati program koji ispisuje elemente zadatog niza pri čemu preskače svaki treći element.
//Primer: ako je zadat niz​[1,2,3,4,5,6,7]​ treba ispisati ​​1 2 4 5 7​.
//Primer: ako je zadat niz​[15,35,-122,84,-2199,55648,1,2013,-975]​ treba ispisati​​ 15 35 84 -2199 1 2013​

var niz = [15, 35, -122, 84, -2199, 55648, 1, 2013, -975];
var i = 0;

while (i < niz.length) {
	if ((i + 1) % 3 == 0) {
		i++;
		continue;
	}

	console.log(niz[i]);
	i++;
}