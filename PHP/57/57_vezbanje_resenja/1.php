<?php

    // a) provera da li se s sastoji samo od malih slova
    $s = 'apple';
    $regexp = '/^[a-z]+$/';
    $is_lower_only = preg_match($regexp, $s);
    if ($is_lower_only){
        echo "Lower letters only!";
    } else {
        echo "Nope, no lower letters only!";
    }


    // b) provera da li s pocinje velikim slovom
    $s = 'Apple';
    $regexp = '/^[A-Z].+/';
    $is_capitalized = preg_match($regexp, $s);
    if ($is_capitalized){
        echo "First letter capitalized!";
    } else {
        echo "Nope, first letter not capitalized!";
    }

    // c) provera da li s sadrzi barem jednu cifru
    $s = 'my123superPass';
    $regexp = '/.*[0-9].*/';
    $any_digits = preg_match($regexp, $s);
    if ($any_digits){
        echo "There are some digits!";
    } else {
        echo "Nope, there are no digits!";
    }


    // d) provera da li se s zavrsava sa .php (ne razlikovati mala i velika slova)
    $s = 'test.pHp';
    $regexp = '/.*\.php/i';
    $php_file = preg_match($regexp, $s);
    if ($php_file){
        echo "Php file is here!";
    } else {
        echo "Nope, there is no php files here!";
    }

    // Materijal za citanje: 
    // https://www.jotform.com/blog/php-regular-expressions/
    // Regex online test: 
    // https://www.phpliveregex.com/

?>