// Ranije smo objekte pravili koristeci takozvanu funkciju konstruktor.
function ProgramskiJezikTmp(ime, ekstenzija) {
    this.ime = ime;
    this.ekstenzija = ekstenzija;
    this.prikazi = function () {
        return "Jezik: " + this.ime + " ekstenzija: " + this.ekstenzija;
    };
}

let jezik = new ProgramskiJezikTmp("JavaScript", "js");
console.log(jezik.prikazi());

// Ipak, ES6 nudi cistiju sintaksu koja je poznata vecini programera
// koji dolaze iz sveta jezika kao sto su C++, Java, C#, PHP, Python...
class ProgramskiJezik {
    constructor(ime, ekstenzija) {
        this.ime = ime;
        this.ekstenzija = ekstenzija;
    }

    prikazi() {
        return `Jezik: ${this.ime} ekstenzija: ${this.ekstenzija}`;
    }
}

jezik = new ProgramskiJezik("JavaScript", "js");
console.log(jezik.prikazi());