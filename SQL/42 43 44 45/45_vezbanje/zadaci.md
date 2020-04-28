---
urlcolor: cyan
colorlinks: true
title: "MatF - IT Obuka - Blok 45"
author: Nemanja Mićović
date: "2019-05-03"
---
# Vežbanje za blok 45

## Napomena za zadatke
Radnje nakon pravljenja baze podataka potrebno je napisati i izvršiti
kao SQL upite, a ne koristiti interaktivno PhpMyAdmin.
Dozvoljeno je SQL upite izvršiti kroz SQL tab u okviru PhpMyAdmin-a.

## Napomena za lozinke
Lozinke u bazi ne treba čuvati u svom izvornom obliku, već je potrebno čuvati
njihove heširane vrednosti. U praksi se najčešće koristi algoritam `SHA256` koji
generiše 256 bitova za prosleđeni ulaz. Zapisano heksadekadno, dobija se
string dužine 64 karaktera.

U bazi koju ste dobili, polje `password` sadrži heširanu lozinku za svakog korisnika,
pri čemu su lozinke postavljene na istu vrednost kao i korisničko ime. Dakle korisnik
`pera` ima lozinku `pera` ali je ona u bazi upisana kao `ae0a456...` jer je to
vrednost `SHA256(pera)`.

Možete koristiti [sledeći sajt](https://emn178.github.io/online-tools/sha256.html) za
generisanje SHA256 stringova.

## Zadaci
1. Učitati bazu podataka `korisnici` iz skripte `korisnici.sql`.
1. Proveriti da li u bazi postoji korisnik `pera` sa lozinkom `SHA256(pera)`.
1. Korisniku `pera` lozinku promeniti na `SHA256(pera1)`.
1. Obrisati korisnika `pera`.
1. U bazu dodati korisnika `pera` sa lozinkom `SHA256(pera)`.
1. Prebrojati koliko korisnika postoji u bazi. Kolonu imenovati kao `BrojKorisnika`.
1. Izlistati sve korisnike koji su u bazu dodati u periodu 26.5.2019 između `07:00` i `07:05`.
    Mala pomoć za pretragu na vebu: `comparing timestamps in sql`
1. Pronaći `email` adresu korisnika `pera`.
1. Prikazati sva korisnička imena iz baze sortirana rastuće.
1. Prikazati minimalni i maksimalni `id` iz baze. Kolone imenovati `Mini` i `Maksi`.
1. Prikati sve podatke o svim korisnicima koji imaju `gmail` mejl adresu. Koristiti operator `like` pri poređenju.
