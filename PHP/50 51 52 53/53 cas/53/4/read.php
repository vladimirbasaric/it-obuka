<?php
// w oznacava da se ucitavaj iz fajla
// die je ispis u slucaju da ne moze da se otvori fajl (npr. ne postoji)
$fajl = fopen("dani.txt", "r") or die("Fajl ne moze da se otvori!");

echo "<p>Dani u nedelji:</p>";
echo "<ul>";
// dokle god se ne dodje do kraja fajla
while (!feof($fajl)) {
	// fgets ucitava liniju po liniju
	echo "<li>".fgets($fajl)."</li>";
}
echo "</ul>";

// zatvaranje fajla nakon ucitavanja
fclose($fajl);
?>