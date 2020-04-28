/*
let ucenici = {
    'Stefan': 5,
    'Nikola': 4,
    'Milica': 3,
    'Olivera': 5,
};
*/

// Ovo je prljavo, treba koristiti Map koji nudi vise funkcionalnosti.
let ucenici = new Map(
    [
        ['Stefan', 5],
        ['Nikola', 4],
        ['Milica', 3],
        ['Olivera', 5],
    ]
);

// Upisivanje u mapu
ucenici['Nemanja'] = 5;
ucenici['Lazni ucenik'] = 1;

// Brisanje iz mape
ucenici.delete('Lazni ucenik');

console.log(ucenici);

// Provera da li postoji informacija o uceniku
if (ucenici.has('Olivera')) {
    // Uzimamo podatke o uceniku
    console.log(ucenici.get('Olivera'));
}

// Obilazak mape (vrlo vazno)

// Nacin 1
for (let iteratorNaElement of ucenici.entries())
{
    console.log(iteratorNaElement[0], iteratorNaElement[1]);
}

// Koristimo destructuring za dobijanje lepse sintakse -> idiomatski nacin koji treba forsirati.
for (let [kljuc, vrednost] of ucenici.entries())
{
    console.log(kljuc, vrednost);
}