-- 1
SELECT `Ime`, `Prezime`, count(*) 
FROM `članovi` join `iznajmljivanje` on `članovi`.`Id` = `iznajmljivanje`.`ČlanId` 
GROUP BY `Ime`, `Prezime` 
ORDER BY `Prezime`;

-- 2
SELECT `Ime`, `Prezime`, count(*) 'Broj knjiga'
FROM `članovi` JOIN `iznajmljivanje` ON `iznajmljivanje`.`ČlanId` = `članovi`.`Id` 
WHERE `Vraćeno` = 0 
GROUP BY `Ime`, `Prezime` 
ORDER BY `Broj knjiga` DESC;

-- 3
SELECT `Ime`, `Prezime`
FROM `knjige` JOIN `iznajmljivanje` ON `iznajmljivanje`.`KnjigaId` = `knjige`.`Id` JOIN `autori` ON `autori`.`Šifra` = `knjige`.`Autor` 
GROUP BY `Ime`, `Prezime` 
HAVING count(*) >= 3
ORDER BY count(*);

-- 4
SELECT `Ime`, `Prezime`, sum(`Broj_strana`) 'Pročitano'
FROM `članovi` JOIN `iznajmljivanje` ON `članovi`.`Id` = `iznajmljivanje`.`ČlanId` JOIN `knjige` ON `knjige`.`Id` = `iznajmljivanje`.`KnjigaId`
WHERE `Vraćeno` = 1
GROUP BY `Ime`, `Prezime`
ORDER BY `Pročitano`;

-- 5
SELECT `Ime`, `Prezime`
FROM `autori` JOIN `knjige` ON `knjige`.`Autor` = `autori`.`Šifra`
WHERE `Broj_strana` = (
		SELECT max(`Broj_strana`) 
		FROM `knjige`
	);

-- 6
SELECT `Naziv`, `Ime`, `Prezime`, `Datum_rođenja`, `Broj_strana`, `Godina_izdanja`
FROM `autori` JOIN `knjige` ON `knjige`.`Autor` = `autori`.`Šifra`
WHERE `Godina_izdanja` = (
		SELECT min(`Godina_izdanja`) 
		FROM `knjige`
	);