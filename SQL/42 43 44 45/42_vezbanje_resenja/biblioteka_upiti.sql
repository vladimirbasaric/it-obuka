-- 1
INSERT INTO `knjige`(`Id`, `Naziv`, `Autor`, `Broj_strana`, `Godina_izdanja`) VALUES (NULL, "Znakovi pored puta", "IA200", 476, 1976), (NULL, "Mister Dolar", "BN408", 93, 1932);

-- 2
DELETE FROM `knjige` WHERE `Godina_izdanja` = 1924;

-- 3
UPDATE `iznajmljivanje` SET `Vraćeno`=1 WHERE `Iznajmljeno`<'2019-05-05' AND `Vraćeno`=0;


-- 4
UPDATE `iznajmljivanje` SET `Iznajmljeno` = '2019-05-05', `Vraćeno`=0 WHERE `ČlanId`= 2;

-- 5
DELETE FROM `autori` WHERE `Datum_rođenja` >= '1801-01-01' AND `Datum_rođenja` <= '1900-12-31' 