-- 2

SELECT `ime`, `prezime`, `ocena`
FROM `studenti` JOIN `polaganja` ON `studenti`.`indeks` = `polaganja`.`indeks` 
WHERE `ocena` > 5 AND `sifra` = 'UVIT'
ORDER BY `ocena` DESC, `prezime` ASC;

-- 3
SELECT count(*) AS 'Broj studenata'
FROM `studenti` ;

-- 4
SELECT count(*) AS 'broj_polaganja'
FROM `polaganja`
WHERE `sifra` = 'P1';

-- 5
SELECT `predmeti`.`sifra`, `naziv`, `semestar`, min(`ocena`) 
FROM `polaganja` JOIN `predmeti` ON `polaganja`.`sifra` = `predmeti`.`sifra` 
WHERE ocena > 5
GROUP BY `predmeti`.`sifra`, `naziv`, `semestar`;


-- 6
SELECT `studenti`.`indeks`, `ime`, `prezime`, `ocena`
FROM `studenti` JOIN `polaganja` ON `studenti`.indeks = `polaganja`.indeks 
WHERE `ocena` = (SELECT max(`ocena`)
				FROM `polaganja`
				WHERE `sifra` = 'P2'
			)

	AND `sifra` = 'P2';

-- 7
SELECT avg(`ocena`)
FROM `polaganja`
WHERE `sifra` = 'A1'
	AND `datum` = '2013-07-01'
	AND `ocena` > 5;


-- 8
SELECT sum(`bodovi`)
FROM `predmeti`
WHERE `semestar` = 2;

-- 9
SELECT `indeks`, count(*)
FROM `polaganja`
WHERE `ocena` > 5
GROUP BY `indeks`;

-- 10
SELECT `studenti`.`indeks`, `ime`, `prezime`
FROM `studenti` JOIN `polaganja` ON `studenti`.`indeks` = `polaganja`.`indeks`
WHERE `ocena` > 5
GROUP BY `indeks`, `ime`, `prezime`
HAVING count(*) > 2
ORDER BY count(*) DESC, `prezime`;