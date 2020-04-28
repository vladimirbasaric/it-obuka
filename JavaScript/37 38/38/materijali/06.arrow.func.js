// ES6 uvodi `arrow function` sintaksu za konstrukciju funkcija.
let xs = [1, 2, 3, 4, 5, 6];

let zbir1 = xs.reduce((prethodnaVrednost, trenutnaVrednost, trenutniIndeks, referencaNaNiz) => {
    return prethodnaVrednost + trenutnaVrednost;
});

// Mozemo krace
let zbir2 = xs.reduce((prethodnaVrednost, trenutnaVrednost) => {
    return prethodnaVrednost + trenutnaVrednost;
});

console.log('Suma ', zbir1);
console.log('Suma ', zbir2);

// Zadrzavanje parnih
let parni = xs.filter(x => x % 2 == 0);
console.log('Parni ', parni);

// Ispisivanje svih
xs.forEach(x => console.log(x));