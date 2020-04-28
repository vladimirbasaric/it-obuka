# IT Obuka - blok 52

## Zadatak 1
Proširiti primer iz bloka 34 koji ima implementiranu validaciju forme na nivou klijenta
tako da koristeći Ajax šalje podatke na server i vrši registraciju korisnika.

Koristiti bazu `blok52` i tabelu `korisnici`.

Implementirati serverski deo koji je dužan da prihvati prosleđene podatke,
doda njihov sadržaj u bazu i korisniku odgovori korsteći `json` odgovor, i to:

```json
{
    'success': true,
    'msg': 'Successful register!'
}
```
ako je registracija prošla uspešno, a ukoliko nije, onda:
```json
{
    'msg': 'Failed register! mysqli_error($db)',
    'success': false,
}
```
pri čemu umesto `mysqli_error($db)` treba da stoji povratna vrednost funkcije
koja vraća grešku koju je vratila baza podataka.
