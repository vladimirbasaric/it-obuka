class Knjiga
{
    constructor(naslov, autor, brojStrana)
    {
        this.naslov = naslov;
        this.autor = autor;
        this.brojStrana = brojStrana;
    }

    getNaslov()
    {
        return this.naslov;
    }

    getAutor()
    {
        return this.autor;
    }

    getBrojStrana()
    {
        return this.brojStrana;
    }
}

class Roman extends Knjiga
{
    constructor(naslov, autor, brojStrana, zanr)
    {
        super(naslov, autor, brojStrana);
        this.zanr = zanr;
    }

    getZanr()
    {
        return this.zanr;
    }
}

let book = new Roman("Poslednja Zelja", "Andzej Sapkovski", 342, "Epska fantastika");
console.log(book);