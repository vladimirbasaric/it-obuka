<?php

// standardno dodeljivanje vrednosti promenljivoj
$promenljiva = 'rec';

// vrednost od $promenljiva sada postaje naziv promenljive
// ovim se definise promenljiva $rec koja ima vrednost 'nesto'
$$promenljiva = 'nesto';

echo $promenljiva."<br>"; // ispisuje rec
echo $rec."<br>"; // ispisuje nesto

// ovo je isto kao da smo ispisali $rec
echo $$promenljiva."<br>";
// elegantno je odvojiti u zagradama, da ne dodje do zabune
echo ${$promenljiva}."<br>";


// moze se koristiti i nekoliko $$$$$

$cetvrti = 'peti';
$treci = 'cetvrti';
$drugi = 'treci';
$prvi = 'drugi';

echo $prvi.'<br>'; // ispisuje drugi
echo $$prvi.'<br>'; // ispisuje treci
echo $$$prvi.'<br>'; // ispisuje cetvrti
echo $$$$prvi.'<br>'; // ispisuje peti

?>