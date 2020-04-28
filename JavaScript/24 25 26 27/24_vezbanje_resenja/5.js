/*

5. Za zadata dva dvocifrena broja, odrediti zbir njihovih cifara u zapisu brojeva.

*/

var broj1 = 52,
    broj2 = 30,
    jedinica1, jedinica2, desetica1, desetica2;
jedinica1 = broj1 % 10;
jedinica2 = broj2 % 10;
desetica1 = Math.floor(broj1 / 10) //% 10;
desetica2 = Math.floor(broj2 / 10) // % 10;

var zbir = jedinica1 + desetica1 + jedinica2 + desetica2;
console.log(zbir);