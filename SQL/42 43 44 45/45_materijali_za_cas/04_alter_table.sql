-- U tabeli Zaposleni, dodajemo novu kolonu
-- koja se zove opis.
ALTER TABLE Zaposleni
ADD opis varchar(255);

-- Uklanjamo kolonu opis
ALTER TABLE Zaposleni
DROP COLUMN opis;
