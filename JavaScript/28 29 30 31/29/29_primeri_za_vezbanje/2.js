// 2.
// Napisati funkciju koja radi sledeće: ukoliko joj se proslede dva broja ispisuje njihov zbir, 
// ukoliko joj se proslede dva stringa (niske) vraća njihovu konkatenaciju, 
// a u svim ostalim slučajevim ispisuje da argumenti nisu odgovarajućeg tipa. 

// Na primer, poziv plus(4, 5) ispisuje rezultat 9. 
// Na primer, poziv plus(‘lep’, ‘ dan’) ispisuje poruku ‘lep dan’.
// Na primer, poziv plus(4, ‘lep’) ispisuje poruku ‘Argumenti nisu odgovarajuceg tipa’.

function magicalPlus(firstValue, secondValue) {
    /* Prvo se proverava da li je funkcija pozvana sa dva argumenta. */
    if (arguments.length != 2) {
        /* Ako nije, ispisuje se odgovarajuca poruka i prekida se izvrsavanje funkcije. */
        console.log('Broj argumenata nije korektan!');
        return;
    }

    /* Ukoliko su oba argumenta brojevi, izracunava se i ispisuje njihov zbir. 
    Za proveru tipa promenljive koristi se operator typeof koji vraca ime tipa promenljive. */
    if (typeof firstValue == 'number' && typeof secondValue == 'number') {
        console.log(firstValue + secondValue);
    } else
        /* Ukoliko su oba argumenta niske, ispisuje se niska dobijena njihovim nadovezivanjem. */
        if (typeof firstValue == 'string' && typeof secondValue == 'string') {
            console.log(firstValue + secondValue);
        } else {
            /* U suprotnom se zakljucuje da argumenti nisu odgovarajuceg tipa. */
            console.log('Argumenti nisu odgovarajuceg tipa!');
        }
}

magicalPlus(4, 5);
magicalPlus('lep', 'dan');
magicalPlus(4, 'lep');