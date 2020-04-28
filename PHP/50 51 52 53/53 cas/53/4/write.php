<?php

// ovo ce biti pomocna funkcija koja sluzi za ispis trenutnog sadrzaja fajla
function ispisi($ime) {
	$fajl = fopen($ime, "r");
	while (!feof($fajl)) {
		echo fgets($fajl);
	}
	fclose($fajl);
}

// za ispis se fopen otvara sa w
$fajl = fopen("imena.txt", "w") or die("Fajl ne moze da se otvori!");
$ime = "Petar<br>";
// fwrite pise u fajl string koji je drugi argument
fwrite($fajl, $ime);
fwrite($fajl, "Milan<br>");
fclose($fajl);

// na ovaj nacin proveravamo trenutno sranje u fajlu imena.txt
echo "<p>Prva verzija fajla:</p>";
ispisi("imena.txt");

// ovo otvaranje ce da obrise prethodni sadrzaj, pa tek onda upise novi
$fajl = fopen("imena.txt", "w") or die("Fajl ne moze da se otvori!");
$ime = "Ana<br>";
fwrite($fajl, $ime);
fclose($fajl);

echo "<p>Druga verzija fajla:</p>";
ispisi("imena.txt");

// kada se otvara sa a, novi sadrzaj se dodaje na prethodni, ne brise se nista
$fajl = fopen("imena.txt", "a") or die("Fajl ne moze da se otvori!");
$ime = "Jovana<br>";
fwrite($fajl, $ime);
fclose($fajl);

echo "<p>Treca verzija fajla:</p>";
ispisi("imena.txt");

?>