/* Koriscenje arguments */
// let sum = function(){
//     console.log(arguments);
// }

// sum(2,3,4,5);


/* Naredni kod ne funkcionise jer arguments nije niz. 
    The reduce() method reduces the array to a single value.
    The reduce() method executes a provided function for each value of the array (from left-to-right).
    The return value of the function is stored in an accumulator (total). */

// let sum = function(){
//     return arguments.reduce((total, curr)=>{
//         return total + curr;
//     });
// }

// console.log(sum(2,3,4,5));

/* Mora se pozvati reduce.call */
// let sum = function(){
//     return Array.prototype.reduce.call(arguments,(total, curr)=>{
//         return total + curr;
//     });
// }

// console.log(sum(2,3,4,5));

/*ES6 omogucava da ovo uradimo jednostavnije*/

/*  Sintaksa je: ...NekoIme da se oznaci da je rest parametar
    Skuplja sve argumente funkcije i kreira pravi niz koji koristimo u 
    okviru funkcije kao NekoIme (bez tri tackice)

*/
// let sum = function(...args){
//     //console.log(args);
//     return args.reduce((total, curr)=>total+curr);
// }

// console.log(sum(2,3,4,5));


/*  Primer gde je jedan izdvojeni argument mul i pored toga ostatak parametara
    definisanih pomocu rest parameter ...numbers
    Dakle, ne moraju svi parametri biti u okviru rest parametra - moze se po izboru postaviti
    
    Napomena: Naredni primer je uradjen pomocu arraw funckije
    
    map metod iterira kroz niz i vraca niz izmenjen u zavisnosti kakva je funkcija prosledjena */
// let multiply = (mul, ...numbers)=>{
//     //console.log(mul, numbers);
//     return numbers.map((n)=>{
//         return mul * n;
//     });
// };

// //multiply(1,7,4,5);
// let result = multiply(1,7,4,5);
// console.log(result);


// let max = Math.max(2,4,6,7);
// console.log(max);

/* Koriscenje spread operatora
   Nekada ne zna koliko hocemo brojeva da prosledimo  */
let numbers = [2,4,6,7];

/* Ovo nece raditi */
// let max = Math.max(numbers);
// console.log(max);

/* Prvi nacin: koriscenje apply */
// let max = Math.max.apply(null, numbers);  //kao da smo pozvali Math.max(2,4,6,7);
// console.log(max);

/*  Drugi (bolji) nacin je koristiti spread oparator koji ima istu sintaksu kao rest operator
    Spread operator rasporedi elemente */
// let max = Math.max(...numbers);  
// console.log(max);

/* Laksi rad sa nizovima: primer nadovezivanje nizova */
// let newNumbers = [2,4,5,6,8,3];
// let concatArray = newNumbers.concat(numbers);
// console.log(concatArray);

// let newNumbers = [2,4,5,6,8,3,...numbers];
// console.log(newNumbers);

/* Nije moralo na kraj */
// let newNumbers = [2,4,...numbers,5,6,8,3];
// console.log(newNumbers);


/* destructuring */

/* Kako smo pre toga? */
var niz = ["IT", "obuka", "primer"]; /* Kreiranje niza */
/* Izdvajanje elemenata niza */
// var it = niz[0];
// var obuka = niz[1];
// var primer = niz[2];
// console.log(it, obuka, primer);

/* ES6 ima lepu sintaksu za ovo izdvajanje */

/* Svaka promenljiva koju kreiramo ce biti tacno jedan kljuc u nizu, ili jedan element u objektu */
var [it, obuka, primer] = niz; 
/* Nekada je neophodno: node --harmony_distructuring primer.js*/
console.log(it, obuka, primer);


/* Primer sa objektima */
var objekat = {
    it : "IT", 
    obuka : "OBUKA", 
    primer : "Primer"
}
/* Izdvajanje bez distructuring */
// var it = objekat.it;
// var obuka = objekat.obuka;
// var primer = objekat.primer;
// console.log(it, obuka, primer);

var {it, obuka, primer} = objekat;
/* Opet, nekada je neophodno: node --harmony_distructuring primer.js*/
console.log(it, obuka, primer);

/* Ne mora se svaki element niza imenovati za distructuring */
const address = ['Vatroslava Jagica', 5, 'Beograd'];
const [street,  , city ] = address;
console.log(street, city)