// PITALICE


// 1
/*
function f(a, b) {
    var result = a + b;
}
console.log(f(2, 1));
*/

// 2
/*
var a = 10;

function f(a, b) {
    a++;
    b--;
    console.log(a, b);
}
f(a, 2);
console.log(a);
*/

// 3
/*
console.log(console.log('JS'));
*/

// 4
/*
var input = 12;
function f() {
    input = 15;
}
console.log(input);
*/

// 5
/*
var input = 12;
function f() {
    input = 15;
}
f;
console.log(input);
*/

// 6
/*
var input = 12;
function f() {
    input = 15;
}
f();
console.log(input);
*/

// 7
/*
var result;
function add(a, b) {
    return a + b;
}
result = add(2);
console.log(add);
*/

// 8
/*
var a = 12;
var b = 3;
var result;

function add(a, b) {
    return a + b;
}

result = add();
console.log(result);
*/

// 9
/*
var a = 12;
var b = 3;
var result;

function add(a, b) {
    return a + b;
}

result = add(2, 11);
console.log(result);
*/

// 10
/*
console.log(n);
var n = 5;
*/

// 11 
/*
var a = 20;

function f(n) {
    var result = a + n;
    var a = 30;
    return result;
}

console.log(f(5));
*/

// 12
/*
console.log(sum(2, 3));

function sum(x, y) {
    return x + y + 1;
}
*/

// 13
/*
'use strict'
var x = 1;
function f() {
    return x * 2;
}
f(4);
console.log(x);
*/

// 14 
/*
'use strict'
var x = 1;

function f() {
    y = 3;
    return x * y;
}

f(4);
console.log(x);
*/

// 15
/*
var a = [3, 4, 1, 2];

function addOne(array) {
    for (var i = 0; i < array.length; i++) {
        array[i] += 1;
    }
}

addOne(a);

console.log(a);
*/