<?php
    session_start();

    // unset($_SESSION['username']);
    // unset($_SESSION['mode']);

    session_destroy();

    header('Location: 1.html');
?>