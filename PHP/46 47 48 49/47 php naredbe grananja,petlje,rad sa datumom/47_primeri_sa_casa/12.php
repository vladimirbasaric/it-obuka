<?php

$niz = array(1,2,-9,8,-2,100);
$duzina = count($niz);

// buleanska promenljiva
// ima vrednost FALSE -> nismo pronasli negativan element u nizu
// ima vrednost TRUE -> pronasli smo negativan element u nizu
$pronadjen = FALSE;

$i = 0;
while($i<$duzina){
    if($niz[$i]<0){
        echo "Prvi negativan broj u nizu je: $niz[$i].";
        $pronadjen = TRUE;
        // naredba koja prekida izvrsavanje while petlje
        break;
    }
    $i++;
}

// ako je pronadjen ostao FALSE 
// niz ne sadrzi nijedan negativan broj
if(!$pronadjen)
    echo "Ne postoji negativan broj u nizu."

?>