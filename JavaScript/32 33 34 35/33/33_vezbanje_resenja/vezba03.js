var reci = ["javascript", "elementi", "dogadjaji", "nasumicno", "identifikator", "klasa", "dokument", "pogadjanje", "program", "stilovi"];
var odabir = Math.floor(Math.random()*reci.length);
var odabrana_rec = reci[odabir];
var trenutna_rec = new Array();

for(var i=0; i<odabrana_rec.length; i++) 
	trenutna_rec[i] = "*";

// funkcija join spaja elemente niza u nisku
var trenutna = document.getElementById("trenutna_rec");
trenutna.textContent = trenutna_rec.join("");

var broj_promasaja_polje = document.getElementById("broj_promasaja");
var broj_promasaja = 0;
var broj_pokusaja = 0;

var koriscena_slova_polje = document.getElementById("koriscena_slova");
var koriscena_slova = new Array();

var slovo = document.getElementById("slovo");
var dugme = document.getElementById("zameni");

dugme.onclick = function() {
	var tekuce_slovo = slovo.value.trim();

	if(tekuce_slovo=="" || koriscena_slova.indexOf(tekuce_slovo) != -1) {
		slovo.value = "";
		return;
	}

	koriscena_slova.push(tekuce_slovo)
	koriscena_slova_polje.value = koriscena_slova.join("");

	if(odabrana_rec.indexOf(tekuce_slovo) != -1) {
		for(var i=0; i<odabrana_rec.length; i++) {
			if(odabrana_rec.charAt(i) == tekuce_slovo) {
				trenutna_rec[i] = tekuce_slovo;
			}
		}

		trenutna.textContent = trenutna_rec.join("");
	}
	else {
		broj_promasaja++;
		broj_promasaja_polje.textContent = broj_promasaja;
	}
	
	slovo.value = "";

	if(trenutna_rec.indexOf("*") == -1) {
		alert("Cestitamo! Pogodili ste zadatu rec! :)");
	}
	else if (broj_promasaja == 5) {
		alert("Niste uspeli da pogodite zadatu rec... :(");
	}
}