<html>

<body>

<h1>Naslov iz HTML-a</h1>

<p>Ovo je neka recenica u HTML-u.</p>

<?php

include 'promenljive.php';

echo "Prvi broj je: ".$ceoBroj."<br>";
echo "Drugi broj je: ".$decimalniBroj."<br>";
echo $recenica."<br>";

echo "<ul>";
foreach ($niz as $element) {
	echo "<li>".$element."</li>";
}
echo "</ul>";

pozdrav();
echo "Zbir je: ".zbir($ceoBroj, $decimalniBroj);

?>

</body>

</html>