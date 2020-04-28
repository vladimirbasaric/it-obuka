/*

2. Za zadati dvocifreni broj odrediti cifru jedinica.

*/

var broj, cifra_jedinica;
broj = 125;
cifra_jedinica = broj%10; // poslednja cifra se dobija kao ostatak pri deljenju sa 10

console.log(cifra_jedinica);