// Jednostavna funkcija
function saberi(a, b) {
    return a + b;
}

// Anonimna funkcija (desno) koju dodeljujemo promenljivoj levo.
var saberi2 = function(a, b) {
    return a + b;
};

// Slicnu stvar mozemo i napisati koristeci arrow sintaksu:
var saberi3 = (a, b) => a + b;

console.log(saberi(2, 3));
console.log(saberi2(2, 3));
console.log(saberi3(2, 3));

// Immediately Invoked Function Expression
// Anonimna funkcija koju odmah izvrsavamo.
(function() {
    console.log("IIFE! :)");
})()

// Callback
setTimeout(function() {
    console.log("Funkcija koja je izvrsena posle 5s!");
}, 5000);