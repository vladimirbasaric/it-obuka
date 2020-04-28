//1: koriscenje nedeklarisanih promenljivih rezultira Reference Error greskom
console.log(day);

//2: neinicijalizovane promenljive imaju podrazumevano vrednost undefined
var day;
console.log(day);


//3: ocekivani redosled koraka je: deklarisanje promenljivih, njihova inicijalizacija i dalje koriscenje
var day = 'Saturday';
console.log(day);


//4: 
//ovaj primer demonstrira uzdizanje promenljivih: 
//u prvoj fazi interpreter prolazi kroz kod i prikuplja informacije o koriscenim promenljivama,
//dok u drugoj fazi izvrsava kod

console.log(day);
var day = 'Saturday';

//nacin na koji interpreter vidi prethodni blok koda:
var day;
console.log(day);
day = 'Saturday';


//5:
var x = 5;
var y = 6;
console.log(x + y);

//nacin na koji interpreter vidi prethodni blok koda:
var x;
var y;

x = 5;
y = 6;
console.log(x + y);


//6:
var x = 5;
console.log(x + y);
var y = 6;

//nacin na koji interpreter vidi prethodni blok koda:
var x;
var y

x = 5;
console.log(x + y);
y = 6;


//7:
var greeting = 'Hello ';
var name = 'Petar';
console.log(greeting + name);


//nacin na koji interpreter vidi prethodni blok koda:
var greeting;
var name;

greeting = 'Hello ';
name = 'Petar';
console.log(greeting + name);


//8:
var greeting = 'Hello ';
console.log(greeting + name);
var name = 'Petar';

//nacin na koji interpreter vidi prethodni blok koda:
var greeting;
var name;

greeting = 'Hello ';
console.log(greeting + name);
name = 'Petar';


//9:
console.log(greeting + name);
var greeting = 'Hello ';
var name = 'Petar';

//nacin na koji interpreter vidi prethodni blok koda:
var greeting;
var name;

console.log(greeting + name);
greeting = 'Hello ';
name = 'Petar';

//10: uzdizanje se dosledno primenjuje i na lokalni opseg 
function test() {
    var x = 10;
    var y = 5;
    var result;

    result = x + y;

    return result;
}

var testResult = test();
console.log(testResult);


//nacin na koji interpreter vidi prethodni blok koda:
function test() {
    var x;
    var y;
    var result;

    x = 10;
    y = 5;

    result = x + y;

    return result;
}
var testResult;

testResult = test();
console.log(testResult);


//11: 
function test() {
    var x = 10;
    var result;

    result = x + y;

    var y = 5;

    return result;
}

var testResult = test();
console.log(testResult);

//nacin na koji interpreter vidi prethodni blok koda:
function test() {
    var x;
    var result;
    var y;

    x = 10;
    result = x + y;
    y = 5;

    return result;
}
var testResult;

testResult = test();
console.log(testResult);


//12: uzdizanje se primenjuje i nad deklaracijama funkcija
function sum(a, b) {
    console.log(a + b);
}

var x = 10;
var y = 5;
sum(5, 6);

//nacin na koji interpreter vidi kod:
function sum(a, b) {
    console.log(a + b);
}

var x;
var y;

x = 10;
y = 5;
sum(5, 6);


//13:
var x = 10;
var y = 5;
sum(x + y);


function sum(a, b) {
    console.log(a + b);
}


//nacin na koji interpreter vidi kod: 
var x;
var y;

function sum(a, b) {
    console.log(a + b);
}

x = 10;
y = 5;
sum(x + y);



//14: zbog nacina zadavanja funkcija, uzdizanje u slucaju funkcijskih izraza ne daje indenticne rezultate
var x = 10;
var y = 5;

sum(x, y);

var sum = function (a, b) {
    console.log(a+b);

}


//nacin na koji interpreter vidi kod: 
var x;
var y;
var sum; // sum = undefined;

x = 10;
y = 5;

// ovaj poziv ce rezultirati Type Error greskom je pokusavamo da izvrsimo kao funkciju nesto sto nije funkcija
sum(x, y);

sum = function (a, b) {
    console.log(a+b);
}