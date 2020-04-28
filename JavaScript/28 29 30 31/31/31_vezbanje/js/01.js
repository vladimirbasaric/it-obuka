// VAS KOD
// Napravite funkcije konstruktore da kod u nastavku proradi.
function Car(manufacturer, model, age) {
    this.manufacturer = manufacturer;
    this.model = model;
    this.age = age;
    this.determineAge = function () {
        return 2019 - this.age;
    }
}
// KRAJ VASEG KODA

var car1 = new Car("Fiat", "Punto", 2008);
var car2 = new Car("Honda", "Accord", 2010);

console.log(car1);
console.log(car2);

console.log("Proizvodjac: " + car1.manufacturer + " model: " + car1.model);
console.log("Proizvodjac: " + car2.manufacturer + " model: " + car2.model);

console.log("Starost: " + car1.determineAge());
console.log("Starost: " + car2.determineAge());