<?php
$uploadOk = 1;
if(isset($_FILES['fileToUpload'])){
$target_file = "uploads/".basename($_FILES['fileToUpload']['name']);
$file_name = $_FILES['fileToUpload']['name'];
$file_size = $_FILES['fileToUpload']['size'];
$file_tmp = $_FILES['fileToUpload']['tmp_name'];
$file_type = $_FILES['fileToUpload']['type'];
$parts = explode('.',$_FILES['fileToUpload']['name']);
$file_ext=strtolower(end($parts));

$expensions= array("jpeg","jpg","png");
      
if(in_array($file_ext,$expensions) === false){
	echo "Nije dozvoljena odabrana ekstenzija dokumenta (extension not allowed, please choose a JPEG or PNG file.)";
	$uploadOk = 0;
}

if($file_size > 2097152){
	echo "Fajl mora da bude manji od 2MB";
	$uploadOk = 0;
}

if(file_exists($target_file)){
	echo "Fajl već postoji.";
	$uploadOk = 0;
}

if($uploadOk == 0){
	echo "Vaš fajl nije otpremljen";
}
else{
	move_uploaded_file($file_tmp,$target_file);
	echo "Success";
}

echo "<br>";
echo "Izabrani fajl: ".$file_name."<br>";
echo "Velicina fajla: ".$file_size."<br>";
echo "Tip fajla: ".$file_type."<br>";
}
?>