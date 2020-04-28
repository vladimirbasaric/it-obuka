-- 1
INSERT INTO `predmet`(`sifra`, `naziv`, `bodovi`, `semestar`) VALUES ('RBP', 'Relacione baze podataka', 5, 5), ('PBP', 'Programiranje baza podataka', 5, 6), ('PrBP', 'Projektovanje baza podataka', 8, 7);

-- 2
UPDATE `predmet` SET `bodovi`=8 WHERE `semestar` = 5;

-- 3
INSERT INTO `student`(`Indeks`, `Ime`, `Prezime`, `Napomena`) VALUES ('mr16145', 'Ivan', 'Petrovic', '')

-- 4
INSERT INTO `polaganja`(`indeks`, `sifra`, `ocena`, `datum`) VALUES ('mr16145', 'PBP', 6, '2018-06-22'), ('mr16145', 'RBP', 7, '2018-01-29'), ('mr16145', 'A1', 8, '2018-07-02'), ('mr16145', 'P1', 9, '2018-02-04');

-- 5
DELETE FROM `student` WHERE `Prezime` = 'Petrovic'

-- 6
DELETE FROM `student` WHERE `Napomena` <> ''