<?php

echo "Fajl unutra.php:<br>";

echo getcwd() . "<br>"; // vraca trenutni folder u zavisnosti od fajla iz koga je pozvan
echo __DIR__ . "<br>"; // uvek vraca trenutni folder fajla gde se poziva
echo __FILE__ . "<br>"; // uvek vraca apsolutnu putanju za fajl za koji je definisan

?>