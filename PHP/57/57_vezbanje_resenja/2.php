<?php
    /* 
        stdClass je genericka PHP klasa. Istance ove klase ne sadrze 
        predefinisana svojstva ili metode. Ekvivalent ove  funkcije 
        u JavaScriptu bi bilo kreiranje praznog objekta sa {} 
        npr. var obj = {}. 
    */
    $user = new stdClass();
    $user->name = "Ana";
    $user->surname = "Popovic";

    /* 
        json_encode je funkcija koja za zadati PHP objekat generise odgovarajucu 
        JSON string reprezentaciju. 
        Ekvivalent ove funkcije u JavaScriptu je JSON.stringify.
    */

    $user_in_json = json_encode($user);
    echo "JSON: ". $user_in_json;

?>