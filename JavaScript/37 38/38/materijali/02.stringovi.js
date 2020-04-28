// Ukoliko je potrebno da formatiramo string (izuzetno cesta operacija u prakticnim primenama),
// mozemo koristiti takozvani `template literals`, odnosno posebnu sintaksu koja dozvoljava
// da zapisemo u kom obliku je potrebno generisati string. `Template literal` se pravi koristeci
// zakoseni jednostruki navodnik, takozvani bektik (eng. backtick) -> `
let jezik = 'js';
let primena = 'veb';
let standard = 'es'
let standardBr = 6;

let ime = `Zdravo ja sam jezik ${jezik}, moja primena je na ${primena}-u, a moj trenutni standard je ${standard}${standardBr}.`;
console.log(ime);

console.log();

// Ukoliko je potrebno generisati dug string koji se prelama u vise linija, moze se koristiti takodje
// jednostruki zakoseni navodnik koji dozvoljava da se tekst prelomi u vise linija.
let pesma = `Славу слави српски кнез Лазаре
У Крушевцу мјесту скровитоме.
Сву господу за софру сједао,
Сву господу и господичиће:
С десне стране старог Југ-Богдана,
И до њега девет Југовића;
А с лијеве Вука Бранковића,
И осталу сву господу редом:
У заставу војводу Милоша,
И до њега дв'је српске војводе:
Једно ми је Косанчић Иване,
А друго је Топлица Милане.`

console.log(pesma);