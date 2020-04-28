<?php
$num =3.55;
$min = -5.5;
$max = 5.5;

if(!filter_var($num,FILTER_VALIDATE_FLOAT)===false and $num >= $min and $num <= $max){
	echo "Promenljiva je u traženom opsegu"."<br>";
}
else{
	echo "Promenljiva nije u traženom opsegu"."<br>";
}
?>