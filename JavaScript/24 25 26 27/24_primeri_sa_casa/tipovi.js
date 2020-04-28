/*

Brojevi - numerički tip (engl. number). Svi numerički tipovi su zapisani u 64 bita. 
Nad numeričkim tipovima su defnisani standardni binarni operatori + , −, * , / , % , < , <= , > , >= i unarni operator −.

JavaScript podržava: 
    • celobrojne vrednosti — 0 , 7 , −42 , ... 
    • razlomljene vrednosti — 9.81 , 2.998e8 (= 2.998·108), ...
    • "beskonačnosti" — Infinity , −Infinity 
    • NaN — označava da "nije broj" (skr. Not a Number), iako je njegov tip numerički. 
    Ovaj rezultat možemo dobiti ako, na primer, pokušamo da izračunamo 0 / 0 ili Infinity − Infinity , ili bilo koju drugu nedenisanu operaciju. 
    
*/

var broj = 10;
console.log(broj);  // metod za prikaz zadatog izraza na tekstualni izlaz, u nasem slucaju konzolu/terminal

/*

Niske (engl. string). Niske se koriste za reprezentaciju teksta. Kodna shema koja se koristi je Unicode. 
Možemo konstruisati literal ovog tipa pomoću jednostrukih ili dvostrukih navodnika, kao i "nakošenih" navodnika (tzv. šablon-literali (engl. template literals)). 
Na primer: 
    • 'Programiranje u JavaScript−u!' 
    • "Srecno na obuci!" 
    • `A tek da vidis nastavak kursa!` 
    
Treba voditi računa o tome da kad započnemo literal niske jednim od ova tri karaktera navodnika, prvi sledeći put kada se naiđe na taj karakter, to će se smatrati krajem niske. 
Zato ne možemo direktno ugnežđavati, na primer, dvostruke navodnike, već ih moramo označiti (engl. escape). Označavanje se vrši stavljanjem karaktera \ ispred karaktera koji želimo da označimo. 
Primer, prva linija predstavlja neispravno, a druga linija ispravno ugnežđavanje navodnika: 

 "A onda je rekao: "Uradicu to!"" 
 
 "A onda je rekao: \"Uradicu to!\"" 


Viselinijske niske: upotreba \n ili sablon-literala
    "Ovo je sve prva linija\nA odavde krece druga linija"

    `Ovo je sve prva linija 
    A odavde krece druga linija`


*/

var niska1 = "dobro ";
var niska2 = "jutro";

var niska3 = niska1+niska2; // niske se mogu nadovezivati operatorom +


/*

Bulove vrednosti JS podržava izračunavanja koja proizvode Bulove vrednosti — true (tačno) i false (netačno). 
Binarni operatori poređenja regularno proizvode Bulove vrednosti nakon izračunavanja. 
Kao i u drugim programskom jezicima, Bulove vrednosti se najčešće koriste kao uslovi u naredbama grananja, petlji, i dr. 
Baratanje Bulovim vrednostima se može jednostavno obaviti korišćenjem standardnih binarnih operatora:
    && (konjukcije)
    || (disjunkcije)
    unarnog operatora ! (negacije)
    ternarnog operatora ?: (uslovni operator)

Prazne vrednosti - postoje dve specijalne vrednosti, null i undefined, koje se koriste da označe odsustvo "vrednosti koje ima značenje". 
One same predstavljaju vrednosti, ali ne nose nikakvu informaciju. 

Primer: promenljiva bez inicijalizacije ima vrednost undefined.
        promenljivoj se moze dodeliti objekat null, ali onda ona ne nosi nikakvu informaciju.

*/


// typeof operator sluzi za dobijanje tipa 
typeof(2);
var ime = "Stefan";
typeof(ime);
var prezime;
typeof(prezime);

