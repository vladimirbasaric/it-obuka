// Kreiramo objekat - slozenu strukturu koja modeluje
// entitet iz realnog sveta.
var person1 = {
    "firstName": "Brendan",
    "lastName": "Eich",
    "age": 57,
};

// person1 je referenca na objekat koji se nalazi negde u memoriji.
// Dakle person1 nije bas direktno objekat, vec pomocu person1 mozemo
// dobiti objekat koji je uskladisten negde u memoriji.

// Pogledajte kako izgleda objekat kada se ispise u konzoli.
console.log(person1);

// Atributima moze pristupiti na dva nacin:
console.log("Kreator jezika JS je " + person1.firstName + " " + person1.lastName);
console.log("Kreator jezika JS je " + person1["firstName"] + " " + person1["lastName"]);

// Sta ukoliko zelimo da napravimo jos jednog coveka?
person2 = {
    "firstName": "Tim",
    "secondName": "Berners-Lee",
    "age": 63,
};

// Primetimo da i person1 i person2 imaju zapravo iste atribute, ali razlicite vrednosti.
// Sustinski zelimo da ne moramo svaki put da navodimo atribute (i ponavljamo istu stvar),
// vec da APSTRAHUJEMO SLICNOSTI.

// Jedan nacin koji mozemo i sami da smislimo:
function createPerson(firstName, lastName, age) {
    var obj = {
        "firstName": firstName,
        "lastName": lastName,
        "age": age,
    }
    return obj;
}

// person1 = createPerson("Brendan", "Eich");

// Ipak, JS poseduje sintaksu koja omogucava da se ovo krace i efektnije zapise:
// -> Ovo se naziva function constructor. Konvencija je da funkcija konstruktor
// pocinje VELIKIM slovom.
function Person(firstName, lastName, age) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
}

// Pravimo prethodna dva coveka :)
var p1 = new Person("Brendan", "Eich", 57);
var p2 = new Person("Tim", "Berners-Lee", 63);

// Ovo ne zelimo - pozivanje funkcije konstruktora bez kljucne reci NEW.
var p3 = Person("Brendan", "Eich", 57);
console.log(p1);
console.log(p2);
console.log(p3);