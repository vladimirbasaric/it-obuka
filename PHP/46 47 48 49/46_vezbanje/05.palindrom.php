<?php
// Napisati php funkciju palindrom koja proverava da li je
// prosledjeni string palindrom.
// String je palindrom ako je jednak stringu koji se dobije
// njegovim obrtanjem.

function palindrom(string $s): bool
{
    // --------
    // Vas kod
    // --------
}

if (palindrom("anavolimilovana")) {
    echo "Jeste palindrom!" . '<br>';
}

if (palindrom("nije palindrom")) {
    echo "Jeste palindrom!";
} else {
    echo "Nije palindrom!";
}
