<?php
$str = "<h1>Hello world</h1>";
$str = filter_var($str,FILTER_SANITIZE_STRING);
echo $str."<br>";

$int = 150;
if(!filter_var($int,FILTER_VALIDATE_INT)===false){
	echo "Jeste ceo broj"."<br>";
}
else{
	echo "Nije ceo broj"."<br>";
}

$int = 0;
if(filter_var($int,FILTER_VALIDATE_INT)===0 || !filter_var($int,FILTER_VALIDATE_INT)===false){
	echo "Jeste ceo broj"."<br>";
}
else{
	echo "Nije ceo broj"."<br>";
}

$email = "marko.markovic@gmail.com";
//$email = filter_var($email,FILTER_SANITIZE_EMAIL);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false){
	echo "$email je ispravna e-mail adresa"."<br>";
}
else{
	echo "$email nije ispravna e-mail adresa"."<br>";
}

$url = "http://itobuka.matf.bg.ac.rs/";
$url = filter_var($url,FILTER_SANITIZE_URL);

if(!filter_var($url,FILTER_VALIDATE_URL)===false){
	echo "$url je ispravan URL"."<br>";
}
else{
	echo "$url nije ispravan URL"."<br>";
}

$num =122;
$min = 1;
$max = 200;

if(!filter_var($num,FILTER_VALIDATE_INT,array("options"=> array("min_range"=>$min,"max_range"=>$max)))===false){
	echo "Promenljiva je u traženom opsegu"."<br>";
}
else{
	echo "Promenljiva nije u traženom opsegu"."<br>";
}

$str = "<h1>Hello WorldÆØÅ!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr."<br>";
?>