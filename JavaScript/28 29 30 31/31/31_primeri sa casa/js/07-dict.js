info = {
    "Stefan": 4.56,
    "Milica": 4.44,
    "Nikola": 3.21,
    "Natasa": 4.2,
    "Nemanja": 4.5,
    "Olivera": 5.0,
};

// Provera da li postoji kljuc "Olivera"?
if ("Olivera" in info) {
    console.log("Informacije o Oliveri postoje i prosek je: " + info["Olivera"]);
} else {
    console.log("Ne postoji informacije o Oliveri.");
}

if ("Milan" in info) {
    console.log("Informacije o Milanu postoje i prosek je: " + info["Milan"]);
} else {
    console.log("Ne postoji informacije o Milanu.");
}

// TODO