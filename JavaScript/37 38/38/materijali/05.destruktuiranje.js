function getValues()
{
    return ['JavaScript', 'js'];
}

//  Ukoliko je potrebno da se vrati vise vrednosti, ES6 dopusta takozvano
// destruktuiranje, odnosno da 'razmotamo' vrednost sa desne strane i pronadjene
// stvari smestimo u odgovarajuce promemnljive. U ovom primeru se prave 2 nove
// promenljive u koje se smestaju prva dva elementa niza.
let [programskiJezik, ekstenzija] = getValues();
console.log(programskiJezik);
console.log(ekstenzija);
