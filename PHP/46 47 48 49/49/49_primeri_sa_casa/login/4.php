<?php

    /* Naglasavamo da je ova strana deo korisnicke sesije. */
    session_start();
    
    /* 
        Pojedinacni elementi $_SESSION niza se mogu obrisati koriscenjem funkcije unset. 
        https://www.php.net/manual/en/function.unset.php
    */
    // unset($_SESSION['username']);
    // unset($_SESSION['password']);
    // unset($_SESSION['mode']);

    /* 
        Svi podaci $_SESSION niza se brisu odjednom koriscenjem funkcije session_destroy. 
        https://www.php.net/manual/en/function.session-destroy.php
    */
    session_destroy();

    /* 
        header funkcija se koristi za postavljanje zaglavlja odgovora koje veb server salje veb klijentu. 
        https://www.php.net/manual/en/function.header.php
        U ovom slucaju se koristi specificna forma sa zaglavljem Location koja preusmerava korisnika na stranu 1.php.
    */
    header('Location: 1.php');
