<?php

echo "Fajl izvan.php:<br>";

echo getcwd() . "<br>";
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";

// nekad je cak prakticnije koristiti i apsolutnu putanju zbog eventualne greske
// koja moze da nastane pri koriscenju relativne putanje
require "unutra\unutra.php";

?>