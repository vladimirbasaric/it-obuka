<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password loging </title>
</head>

<body>
    <?php
    /* 
    Napisati PHP skript koji proverava da li su niske zadate u nizu $passwords korektne šifre: šifra je 
    korektna ako je duža od 5 karaktera i ako sadrži barem jedno veliko slovo i cifru. Informacije o šiframa 
    koje nisu korektne upisati u log datoteku sa imenom passwords_info.php u formatu šifra, njen redni broj i
    uslov koji ne ispunjava. Za testiranje se može koristiti niz 
    $passwords = array(“abc123”, “Abc123”, “ab”, “test_sifra”, “Test_sifra”, “siFra12”), 
    a pojedinačne provere realizovati posebnim funkcijama.
    */

    /* Podesava se lokalno informacija o log datoteci. */
    ini_set('error_log', 'passwords_info.txt');

    /* Fukcija koja proverava da li je sifra duza od 5 karaktera. */
    function long_password($password)
    {
        return strlen($password) > 5;
    }

    // test funkcije 
    // echo long_password("PHP_programming19");

    /* Fukcija koja proverava da li sifra sadrzi barem jedno veliko slovo. */
    function has_uppercase_letter($password)
    {
        /* 
        Ideja je transformisati sifru u sifru zapisanu malim slovima i uporediti da se razlikuje od originalne.
        Na primer, ako je zadata sifra Abc123 njeg ekvivalent je sifra abc123 koja se razlikuje i na osnovu
        toga mozemo da zakljucimo da pocetna sifra sadrzi barem jedno veliko slovo. Ako je zadata sifra abc123, njen
        ekvivalent ostaje sifra abc123 pa mozemo da zakljucimo da ne sadrzi ni jedno veliko slovo.
        */

        $lowercased_password = strtolower($password);
        if ($lowercased_password != $password) {
            return TRUE;
        }

        return FALSE;
    }
    // test funkcije
    // echo has_uppercase_letter("PHP_programming19");

    /* Funkcija koja proverava da li sifra sadrzi barem jednu cifru. */
    function has_digit($password)
    {
        $password_length = strlen($password);
        $digits = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        for ($i = 0; $i < $password_length; $i++) {
            $char = $password[$i];
            if (in_array($char, $digits) == TRUE) {
                return TRUE;
            }
        }
        return FALSE;
    }

    // test funkcije
    // echo has_digit("PHP_programming19");

    /* Definisemo niz sa siframa. */
    $passwords = array("abc123", "Abc123", "ab", "test_sifra", "Test_sifra", "siFra12");

    /* Prolazimo kroz niz. */
    foreach ($passwords as $index => $password) {

        $condition_met = TRUE;

        /* Za svaku sifru proveravamo svaki od uslova. Ako uslov nije ispunjen, zapisujemo poruku u log datoteku. */
        
        if (!long_password($password)) {
            error_log("$password at the position $index: not long enough password");
            $condition_met = FALSE;
        }

        if (!has_digit($password)) {
            error_log("$password at the position $index: has no digits");
            $condition_met = FALSE;
        }

        if (!has_uppercase_letter($password)) {
            error_log("$password at the position $index: has no uppercase letters");
            $condition_met = FALSE;
        }

        /* Sifre koje zadovoljavaju sva tri uslova ispisujemo. */
        if ($condition_met == TRUE) {
            echo $password;
            echo "<br>";
        }
    }

    ?>
</body>

</html>