<?php

// Postoji puno korisnih funkcija za rad sa stringoviam:
// https://www.php.net/manual/en/ref.strings.php

// ----------------------------------------------------------------------------
// substr ( string $string , int $start [, int $length ] ) : string
// ----------------------------------------------------------------------------
// Trazenje podstringa - zelimo da izvucemo samo bbbb
$poruka = 'aaaabbbbcccc';

$start = 4;
$length = 4;

$podstring = substr($poruka, $start, $length);
echo $poruka . '<br>';
echo "substr($poruka, $start, $length) =  $podstring" . '<br>';

// ----------------------------------------------------------------------------
// explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array
// ----------------------------------------------------------------------------
// Od stringa vraca niz stringova razdvojenih po karakteru koji je prosledjen.
$pizza  = "piece1 piece2 piece3";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo $pieces[2]; // piece3
echo '<br>';

// ----------------------------------------------------------------------------
// implode ( string $glue , array $pieces ) : string
// implode ( array $pieces ) : string
// ----------------------------------------------------------------------------
// Implode (join) je suprotna funckija od explode, vrsi spajanje niza stringova
// u jedan string sa vrednoscu $glue (lepak) izmedju.
// Join je isto sto i implode, nema razlike osim u imenu.
$glue = ', ';
$pieces  = ['mortadela', 'cheese', 'ham'];
$comma_separated = implode($glue, $pieces);
echo $comma_separated;
echo '<br>';

// ----------------------------------------------------------------------------
// str_repeat ( string $input , int $multiplier ) : string
// ----------------------------------------------------------------------------
// Omogucava da generisemo string tako sto argument ponavljamo prosledjeni
// broj puta.
$vals = str_repeat('$', 10);
echo $vals . '<br>';

// ----------------------------------------------------------------------------
// strcmp ( string $str1 , string $str2 ) : int
// ----------------------------------------------------------------------------
// Vrsi poredjenje stringova. Vraca 0 ako su isti, > 0 ako je s1 veci od s2,
// i < 0 ako je s1 manji od s2.
$s1 = "zzz";
$s2 = "aaa";
if (strcmp($s1, $s2) > 0) {
    echo "$s1 > $s2";
} else if (strcmp($s1, $s2) < 0) {
    echo "$s1 < $s2";
} else {
    echo "$s1 == $s2";
}
echo '<br>';

// ----------------------------------------------------------------------------
// strrpos ( string $haystack , mixed $needle [, int $offset = 0 ] ) : int
// ----------------------------------------------------------------------------
// Trazi iglu u plastu sena (needle in haystack), odnosno trazi
// podstring $igla u stringu $plastSena.
$plastSena = 'abc';
$igla   = 'b';
$pos = strpos($plastSena, $igla);

// Koristimo === da osim poredjenja vrednosti nametnemo i poredjenje tipova,
// slicno kao u jeziku JS.
if ($pos === false) {
    echo "String '$igla' nije pronadjen u stringu '$plastSena'";
} else {
    echo "String '$igla' je pronadjen u stringu '$plastSena'";
    echo " na indeksu $pos";
}
echo '<br>';

// ----------------------------------------------------------------------------
// strtolower ( string $string ) : string
// strtoupper ( string $string ) : string
// ----------------------------------------------------------------------------
// Prebacuju $string u mala i velika slova.
echo strtolower("ZDRAVO SVETE") . '<br>';
echo strtoupper("zdravo svete") . '<br>';

// ----------------------------------------------------------------------------
// strlen ( string $string ) : int
// ----------------------------------------------------------------------------
// Vraca duzinu stringa.
$n = strlen("aaa");
echo "Duzina stringa 'aaa' je $n" . '<br>';