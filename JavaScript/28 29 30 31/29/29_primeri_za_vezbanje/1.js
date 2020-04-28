// Napisati funkciju koja izračunava zbir svih svojih argumenata.
// Na primer, poziv​ zbir(3,4,5)​ treba da vrati rezultat ​12​.
// Na primer, poziv​ zbir(7,8) ​treba da vrati rezultat ​15​.
// Na primer, poziv​ zbir() ​treba da vrati rezultat ​0.

​
function sumOfArguments() {
    /* Suma argumenata se inicijalno postavlja na 0. */
    var sum = 0;

    /* Svaka funkcija podrazumevano raspolaze arguments promenljivom u koju se smestaju svi argumenti
    nad kojima je funkcija pozvana. Npr. ako je poziv funkcije 
    sumOfArguments (3, 4, 5) arguments je niz [3, 4, 5]
    ili za 
    sumOfArguments (7, 8) arguments je niz [7, 8].
    */

    /* For petlja omogucava prolazak kroz niz arguments i ocitavanje pojedinacnih argumenata. */
    for (var i = 0; i < arguments.length; i++) {
        /* arguments[i] je i-ti argument u pozivu funkcije i njegova vrednost se dodaje ukupnoj sumi. */
        sum += arguments[i];
    }

    /* Funkcija vraca izracunatu sumu. */
    return sum;
}

console.log(sumOfArguments(3, 4, 5));
console.log(sumOfArguments(7, 8));
console.log(sumOfArguments());