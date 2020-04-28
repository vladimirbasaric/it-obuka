/*

4. Za zadati trocifren broj, odrediti da li je cifra desetica parna.

*/

var broj = 123, desetica;
// primer 123
// deljenjem sa 10 -> 12.3
// izvucemo ceo deo sa Math.floor -> 12
// izvucemo cifru jedinica sa % 10 -> 2 -> ovo je cifra desetica polaznog broja
desetica = Math.floor(broj/10) % 10;

// == -> operator poredjenja na jednakost
// ako je ostatak pri deljenju sa 2 jednak nula, to znaci da je cifra parna
parna = desetica % 2 == 0;
console.log(parna);





