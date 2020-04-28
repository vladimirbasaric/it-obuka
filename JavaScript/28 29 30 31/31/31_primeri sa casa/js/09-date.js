// Rad sa datumima je podrzan od strane klase Date u okviru JS jezika.

var date1 = new Date('December 17, 1995 03:24:00');
var date2 = new Date('1995-12-17T03:24:00');
var date3 = new Date(2002, 5, 24, 18, 30);

console.log(date1);
console.log(date2);
console.log(date3);
console.log(date1 === date2);
console.log(date1 - date2);
