-- Upite izvrsavati nad bazom fakultet

-- Napisati upit koji prikazuje polaganja svih studenata
-- za koje je poznato da imaju neku napomenu u baci podaka.
-- Koristiti exists.
SELECT * FROM `polaganja` as p
WHERE EXISTS (
	SELECT *
	FROM studenti as s
    WHERE s.indeks = p.indeks and s.napomena <> ''
);
