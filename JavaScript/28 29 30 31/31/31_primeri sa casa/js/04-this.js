// this predstavlja kljucnu rec koja oznacava trenutni kontekst u kojem se funkcija izvrsava.

var test = {
  prop: 42,
  func1: function() {
    return this.prop;
  },
  func2: () => {
      return this.prop;
  },
};

// Obratite paznju da funkcija koju cuva promenljiva 'func1' moze da pristupi
// atributu 'prop'i procita ga, dok funkcija 'func2' to ne moze.
// Razlika je u tome sto arrow funkcija imaju drugacije definisan kontekst izvrsavanja.
// Generalno treba biti pazljiv sa koriscenjem 'this' izuzev u situacijama kada pravimo
// funkciju konstruktor.
console.log(test.func1());
console.log(test.func2());