// Procitati:
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
xs = [
    "Apple",
    "Orange",
    "Banana",
    "Lemon",
];

console.log(xs);
console.log("pop (skidanje sa kraja): ", xs.pop());
console.log(xs);
console.log("push (dodavanje na kraj): ", xs.push("Cider"));
console.log(xs);
console.log("shift (skidanje sa pocetka): ", xs.shift());
console.log(xs);
console.log("unshift (dodavanje na pocetak): ", xs.unshift("Strawberry"));
console.log(xs);


console.log("");
console.log("Pretraga elementa:");
var i = xs.indexOf("Banana");
console.log("Banana je na indeksu: " + i + " -> provera: " + xs[i]);
i = xs.indexOf("askjdlasjdlksajdklasjdsak;ljd");
console.log("Nepostojece voce: " + i);
// Odnosno, funkcija indexOf vraca -1 ukoliko element ne postoji.

// Naravno, u nizove mozemo stavljati i elemente koji su objekti.
function ProgrammingLanguage(name, createdIn) {
    this.name = name;
    this.createdIn = createdIn;
    this.howOld = function () {
        return 2019 - this.createdIn
    };
}

languages = [
    new ProgrammingLanguage("C++", 1983),
    new ProgrammingLanguage("JS", 1995),
    new ProgrammingLanguage("Python", 1991),
];
console.log("");
console.log("Progamski jezici:");
languages.forEach(x => {
    console.log(x.name, x.createdIn, x.howOld());
});