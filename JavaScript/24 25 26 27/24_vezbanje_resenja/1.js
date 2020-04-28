/*

1. Za zadatu cenu i popust, odrediti finalnu cenu proizvoda.

*/

var cena, popust, cena_sa_popustom;
cena = 1250;
popust = 20; // 20%
cena_sa_popustom = cena * (100-popust) / 100;

console.log(cena_sa_popustom);