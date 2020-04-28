<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP greške - upis u log datoteku </title>
</head>
<body>
<?php

    /* 
    Cesta praksa je da se greske koje se javljaju cuvaju u datoteci - tako sumarno predstavljaju vazan izvor
    informacija o radu aplikacije i problemima koji su nastajali. Ovakve datoteke se zovu log datoteke.
    */
    
    /* 
    U php.ini konfiguracionoj datoteci se nalazi putanja da zvanicne PHP log datoteke. Ovo svojstvo konfigururacije 
    se zove error_log. Ovde cemo ga upotrebiti da lokalno postavimo svoju log datoteku sa imenom our_log.txt. 
    */
    ini_set('error_log', 'our_log.txt');

    /* 
    error_log() je i ime funkcije koja se koristi za upis poruka u log datoteku.
    */
    error_log("Test log message.");
    
    /* 
    Poruke (greske) koje se upisuju u log datoteku mogu da sadrze i detaljnije informacije sa imenom fajla u kojem su
    nastale, funkciji u kojoj su nastale ili liniji u kojoj su nastale. Da bi se ovo postiglo, PHP jezik nudi
    takozvane magicne konstante __FILE__, __FUNCTION__, __LINE__ koje cuvaju potrebne vrednosti. 
    */

    $n1 = 10;
    $n2 = 0; 
    if ($n2 == 0){
        error_log("Division by zero at line ".__LINE__. " in file ". __FILE__);
    }
    else { 
        $result = $n1/$n2;
        echo "Result is $result";
    }
?>
</body>
</html>