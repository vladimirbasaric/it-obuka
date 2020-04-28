/*
Select upitni blok:

SELECT lista_kolona
FROM lista_tabela
WHERE logicki_izraz

*/

-- 1.
SELECT *
FROM STUDENTI

-- 2. limit n  -> prikazuje se prvih n redova rezultata
SELECT *
FROM STUDENTI
LIMIT 3

-- 3. distinct -> prikazuju se samo razlicite vrednosti iz kolone
SELECT DISTINCT INDEKS 
FROM POLAGANJA

-- 4. like -> izbor vrednosti na osnovu slicnosti
SELECT * 
FROM STUDENTI 
WHERE INDEKS LIKE 'mi%'   -- % zamenjuje 0 ili vise karaktera

-- 5. not like -> vrednosti koje ne odgovaraju zadatom sablonu 
SELECT * 
FROM STUDENTI 
WHERE INDEKS NOT LIKE 'mi%'

-- 6.
SELECT * 
FROM STUDENTI 
WHERE PREZIME LIKE 'P%'

-- 7. donja crta _ oznacava tacno jedan karakter
SELECT * 
FROM STUDENTI 
WHERE PREZIME LIKE '_e%'

-- 8. order by lista_kolona -> sortiranje po zadatim kolonama
SELECT * 
FROM STUDENTI 
WHERE IME LIKE 'J%' 
ORDER BY PREZIME    
-- podrazumevano se sortira rastuce (ASC)
-- za opadajuce navodimo nakon liste kolona DESC

-- 9. 
SELECT * 
FROM PREDMETI 
WHERE SEMESTAR = 3
-- u logickom izrazu se mogu koristiti operatori poredjenja
-- jednako =, razlicito <>, manje/vece <, >, <=, >=

-- 10.
SELECT * 
FROM PREDMETI 
WHERE SEMESTAR <> 2

-- 11.  
SELECT * 
FROM PREDMETI 
WHERE SEMESTAR = 3 OR SEMESTAR = 4
-- u logickom izrazu se mogu koristiti logicki operatori
-- konjukcija and, disjunkcija or, negacija not

-- 11. pomocu operatora between 
-- oblik: between vrednost1 and vrednost2
SELECT * 
FROM PREDMETI 
WHERE SEMESTAR BETWEEN 3 AND 4

-- 11. pomocu operatora in
-- oblik: in (vrednost1,vrednost2, ..., vrednostn)
SELECT * 
FROM PREDMETI 
WHERE SEMESTAR IN (3,4)

-- 12. 
SELECT NAZIV 
FROM PREDMETI
WHERE BODOVI BETWEEN 5 AND 10

-- 13.
SELECT NAZIV, BODOVI
FROM PREDMETI
ORDER BY BODOVI DESC

-- 14.
SELECT INDEKS
FROM POLAGANJA
WHERE SIFRA = 'UVIT' AND OCENA > 5

-- 15. indeks kolona je veza izmedju tabele studenti i tabele predmeti
SELECT STUDENTI.INDEKS, IME, PREZIME
FROM STUDENTI, POLAGANJA
WHERE SIFRA = 'UVIT' AND OCENA > 5 AND STUDENTI.INDEKS = POLAGANJA.INDEKS
-- ono po cemu se spajaju kolone stavljamo u where izrazu

-- 15. sa uvodjenjem alijasa na tabele pomocu kljucne reci as
-- alijasi su privremeni nazivi za tabele ili kolone 
SELECT S.INDEKS, IME, PREZIME
FROM STUDENTI AS S, POLAGANJA AS P
WHERE SIFRA = 'UVIT' AND OCENA > 5 AND S.INDEKS = P.INDEKS

-- 16. indeks povezuje studente i polaganja
-- sifra povezuje polaganja i predmete
SELECT S.INDEKS, IME, PREZIME, NAZIV
FROM STUDENTI AS S, POLAGANJA AS P, PREDMETI AS PE
WHERE OCENA = 10 AND S.INDEKS = P.INDEKS AND P.SIFRA = PE.SIFRA

-- 17. 
SELECT NAZIV 
FROM PREDMETI, POLAGANJA
WHERE PREDMETI.SIFRA = POLAGANJA.SIFRA AND OCENA > 5 AND INDEKS = 'mi12234'

-- 18. uvodjenje alijasa za kolone -> privremeni nazivi se prikazuju u rezultatu upita
SELECT INDEKS AS I, PREZIME AS P 
FROM STUDENTI
WHERE IME LIKE 'M%' OR IME NOT LIKE '%a'

-- 19. napomena je kolona koja je podrazumevano prazna
-- ukoliko je zapisan BAR jedan karakter -> postoji napomena
SELECT * 
FROM STUDENTI 
WHERE NAPOMENA LIKE '_%'

-- 20. slucaj kada je rezultat upita prazna tabela
SELECT * 
FROM POLAGANJA
WHERE INDEKS NOT LIKE 'mi%' AND OCENA > 8

-- 21.
SELECT INDEKS, SIFRA, DATUM 
FROM POLAGANJA
ORDER BY DATUM DESC, OCENA ASC

-- 22. u tabeli za polaganja moze postojati vise redova za isti predmet
-- da bismo eliminisali duplikate dodajemo kljucnu rec DISTINCT
SELECT DISTINCT SIFRA
FROM POLAGANJA
WHERE OCENA = 6 OR OCENA = 8 OR OCENA = 10

-- 22. drugi nacin preko in 
SELECT DISTINCT SIFRA
FROM POLAGANJA
WHERE OCENA IN (6,8,10)

-- 23. sortiramo po datumu, pa izvojimo prva tri rezultata
SELECT T1.SIFRA, NAZIV
FROM POLAGANJA AS T1, PREDMETI AS T2 
WHERE OCENA > 5 AND T1.SIFRA = T2.SIFRA -- kolona koja spaja polaganje i predmete
ORDER BY DATUM 
LIMIT 3

-- 24.
SELECT IME, PREZIME
FROM STUDENTI
WHERE IME LIKE '______%'  -- 6 karaktera _ i % -> bar 6 karaktera u imenu

-- 25. prirodno spajanje je spajanje po relaciji =
SELECT STUDENTI.INDEKS, IME, PREZIME, SIFRA
FROM STUDENTI, POLAGANJA
WHERE STUDENTI.INDEKS = POLAGANJA.INDEKS

-- 25. koristeci konstrukciju unutrasnjeg spajanja
-- TABELA1 INNER JOIN TABELA2 ON RELACIJA = NAD ZAJEDNICKIM KOLONAMA
-- SELEKTUJE VRSTE KOD KOJIH JE BILO POKLAPANJA
SELECT STUDENTI.INDEKS, IME, PREZIME, SIFRA
FROM STUDENTI INNER JOIN POLAGANJA
ON STUDENTI.INDEKS = POLAGANJA.INDEKS

-- 26. prirodno spajanje
SELECT INDEKS, NAZIV
FROM POLAGANJA, PREDMETI
WHERE POLAGANJA.SIFRA = PREDMETI.SIFRA AND OCENA > 7
ORDER BY INDEKS

-- 26. unutrasnje spajanje
SELECT INDEKS, NAZIV
FROM POLAGANJA INNER JOIN PREDMETI
ON POLAGANJA.SIFRA = PREDMETI.SIFRA 
WHERE OCENA > 7
ORDER BY INDEKS

-- 27. spoljasnje spajanje
-- LEFT OUTER JOIN ostavlja vrste iz LEVE tabele kod kojih nije 
-- bilo poklapanja po sifri sa desnom tabelom
-- zajedno sa vrstama kod kojih je bilo poklapanja
SELECT NAZIV, INDEKS, OCENA, DATUM
FROM PREDMETI LEFT OUTER JOIN POLAGANJA
ON PREDMETI.SIFRA = POLAGANJA.SIFRA

-- RIGHT OUTER JOIN ostavlja vrste iz DESNE tabele kod kojih nije 
-- bilo poklapanja za trazenu kolonu sa levom tabelom
-- zajedno sa vrstama kod kojih je bilo poklapanja

-- 28. nakon levog spoljasnjeg spajanja, u vrstama prve tabele kod kojih nije 
-- bilo poklapanja, na mesto kolona druge tabele se postavljaju 
-- nedostajuce vrednosti, tj. NULL
-- iz tog razloga restrikcija po uslovu za ocenu 
-- izbacuje te vrste iz rezultata pa se gubi efekat spajanja
SELECT NAZIV, INDEKS, OCENA, DATUM
FROM PREDMETI LEFT OUTER JOIN POLAGANJA
ON PREDMETI.SIFRA = POLAGANJA.SIFRA
WHERE OCENA = 10

-- 28. dobro resenje, ostavljamo vrste gde su ocene 10 ili NULL
-- nakon spajanja
SELECT NAZIV, INDEKS, OCENA, DATUM
FROM PREDMETI LEFT OUTER JOIN POLAGANJA
ON PREDMETI.SIFRA = POLAGANJA.SIFRA
WHERE OCENA = 10 OR OCENA IS NULL
