// deklaracija funkcije (eng. function declaration)

function sum(a, b) {
    console.log(a + b);
}

var x = 10;
var y = 5;
sum(x, y);


// ekvivalentni funkcijski izraz (eng. function expression) 
var sum = function (a, b) {
    console.log(a + b);
};

var x = 10;
var y = 5;
sum(x, y);

// u kontekstu funkcijskih izraza su prirodne i ovakve dodele
var add;

//promenljiva add je sada funkcija
add = sum;
add(6, 7);