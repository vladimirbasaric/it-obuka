-- Postavljamo indeks da kolona naziv mora imaju
-- jedinstvenu vrednost u bazi podataka.
CREATE UNIQUE INDEX index_naziv ON Zaposleni (naziv);

-- Sledeci upit ne bi smeo da prodje nakon prethodno
-- zadatog ogranicenja.
INSERT INTO Zaposleni
VALUES (NULL, 'Asistent', 24);

-- SQL query:
-- 
-- 
-- INSERT INTO Zaposleni
-- VALUES (NULL, 'Asistent', 24)
-- MySQL said: Documentation
-- 
-- #1062 - Duplicate entry 'Asistent' for key 'index_naziv'

-- Brisemo indeks
ALTER TABLE Zaposleni
DROP INDEX index_naziv;

-- Prethodni upit bi potom trebao da prodje.
INSERT INTO Zaposleni
VALUES (NULL, 'Asistent', 24);
