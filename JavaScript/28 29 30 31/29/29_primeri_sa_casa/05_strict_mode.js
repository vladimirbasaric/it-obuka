// Strogi mod pregledaca omogucava da neke konstrukcije jezika 
// koje potencijalno mogu uticati na nezeljeni tok izvrsavanja programa
// vidimo kao greske. 


// 1: 
// ovaj primer je potencijalno problematican jer deklaracija promenljive 
// x nije propisna (nedostaje var) pa u zavisnosti od dela u kojem se kod
// nadje moze voditi do uvodjenja globalnih promenljivih

'use strict';
x = 15;
console.log(x);


// 2: 
// Strogi mod rada pregledaca se moze odnositi na ceo kod ili samo na
// kontekst izvrsavanja odredjene funkcije. 

// Primer ce rezultirati Reference Error greskom jer se nece dozvoliti
// uvodjenje globalnih promenljivih kroz funkciju. 

function strictTest(x) {
    'use strict';
    x++;
    y = 15;
}

var x = 10;

strictTest(x);
console.log(x);
console.log(y);


// Naravno, u strogom modu je dozvoljeno koriscenje globalnih promenljivih koje vec postoje. 

function strictTest(x) {
    'use strict';
    x++;
    y = 15;
}

var x = 10;
var y = 5;

strictTest(x);
console.log(x);
console.log(y);


// 3:
// Strogi mod rada pregledaca skrece paznju i na neke druge ceste "tihe" greske 
// koje su moguce u kodu. 

// u ovom primeru pokusava se sa promenom niski za koje je poznato da su nepromenljive 

// ovaj fragment koda se izvrsava bez greske, ali i bez zeljenog efekta
var s = 'abc';
s[0] = 'A';
console.log(s);

// ovaj fragment koda rezultira greskom
'use strict';
var s = 'abc';
s[0] = 'A';
console.log(s);
