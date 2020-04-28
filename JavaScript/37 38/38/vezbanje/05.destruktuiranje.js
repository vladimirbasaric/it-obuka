class Covek
{
    constructor(ime, prezime)
    {
        this.ime = ime;
        this.prezime = prezime;
    }
}

// Vratiti niz koji sadrzi ime i prezime prosledjenog coveka.
function vratiImePrezime(covek)
{
    return undefined; // Vas kod
}

// Koristeci destruktuiranje (otpakivanje) pozvati funkciju vratiMePrezime
// kojoj je prosledjen covek sa imenom 'Milos' i prezimenom 'Obilic'
let [imeCoveka, prezimeCoveka] = vratiImePrezime(new Covek("Milos", "Obilic"));
console.log(imeCoveka);
console.log(prezimeCoveka);