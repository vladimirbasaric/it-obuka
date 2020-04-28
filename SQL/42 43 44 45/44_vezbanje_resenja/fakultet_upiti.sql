-- 1
SELECT count(*)
FROM `predmeti` 
WHERE `semestar` = 3 OR `semestar` = 4;

-- 2 
SELECT `studenti`.`indeks`, `ime`, `prezime`, count(*) AS 'broj polozenih ispita'
FROM `studenti` JOIN `polaganja` ON `studenti`.`indeks` = `polaganja`.`indeks`
WHERE `ocena` > 5
GROUP BY `studenti`.`indeks`, `ime`, `prezime`
ORDER BY `broj polozenih ispita` DESC;

-- 3
SELECT `indeks`, avg(`ocena`) 
FROM `polaganja` 
WHERE `ocena` > 5
GROUP BY `indeks`;

-- 4
SELECT `studenti`.`indeks`, `ime`, `prezime`, count(*) AS 'polozeno ispita', sum(`bodovi`) AS 'polozeno bodova'
FROM `studenti` JOIN `polaganja` ON `studenti`.`indeks` = `polaganja`.`indeks` JOIN `predmeti` ON `predmeti`.`sifra` = `polaganja`.`sifra` 
WHERE `ocena` > 5 
GROUP BY  `studenti`.`indeks`, `ime`, `prezime`;

-- 5 
SELECT count(*) 
FROM `studenti` 
WHERE `indeks` LIKE "mi%";

-- 6
SELECT `studenti`.`indeks`, avg(`ocena`) 
FROM `polaganja` JOIN `studenti` ON `studenti`.`indeks` = `polaganja`.`indeks` 
WHERE `ocena` > 5 
	  AND 
	  `studenti`.`indeks` like "__11%"
GROUP BY `studenti`.`indeks`;

-- 7
SELECT `prezime`, `ime` 
FROM `polaganja` JOIN `studenti` ON `studenti`.`indeks` = `polaganja`.`indeks`
WHERE `ocena` > 5
GROUP BY `prezime`, `ime`
HAVING avg(`ocena`) > 8;

-- 8 
SELECT `naziv`, `bodovi` 
FROM `predmeti` JOIN `polaganja` ON `polaganja`.`sifra` = `predmeti`.`sifra` 
WHERE `ocena` > 5 AND `semestar` % 2 = 0
GROUP BY `naziv`, `bodovi` 
HAVING count(*) >= 3;

-- 9
SELECT `naziv`, avg(`ocena`) AS 'prosecna ocena'
FROM `polaganja` JOIN `predmeti` ON `predmeti`.`sifra` = `polaganja`.`sifra`
WHERE`datum` between '2014-01-01' AND '2014-12-31'
	  AND `ocena` > 5 AND `semestar` % 2 = 1
GROUP BY `naziv`
