// Objekti imaju i svoje ponasanje.
// Na primer, u realnom svetu, coveka mozemo zamolitli da se predstavi.
function Person(firstName, lastName, age) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.introduceYourself = function() {
        return "Hello my name is " + this.firstName + " " + this.lastName + " and my age is " + this.age;
    };
}

// Funkcije koje pozivamo nad objektima nazivacemo "METODI", odnosno,
// introduceYourself je metod koji pozivamo nad objektom.

var p1 = new Person("Brendan", "Eich", 57);
var p2 = new Person("Tim", "Berners-Lee", 63);
var introduction = p1.introduceYourself();
console.log(introduction);

// Objektima mozemo dinamicki dodavati atribute i metode.
p1.created = "JavaScript";
p2.whoAreYou = function() {
    return "I am sir " + this.firstName + " " + this.lastName + "!";
}
// Primetimo da na p2 nismo dodali aribut created, tako da naravno
// on nece ni postojati u tom objektu.
console.log("p1.created -> " + p1.created);
console.log("p2.created -> " + p2.created);

// p1.whoAreYou ispaljuje gresku.
// console.log("p1.whoAreYou() -> " + p1.whoAreYou());
console.log("p2.whoAreYou() -> " + p2.whoAreYou());