<?php
/* 
    Veb klijent, poput pregledaca Google Chrome, i veb server, poput Apache servera, komuniciraju razmenom
    HTTP zahteva i HTTP odgovora. Podrazumevano, svaki HTTP zahtev od strane klijenta veb server obradjuje 
    nezavisno od drugih zahteva. Nekada takvo ponasanje nije pozeljno. Na primer, ukoliko se korisnik uspesno
    ulogovao informacija da je ulogovan bi trebala da bude poznata i u njegovom daljem navigiranju kroz veb 
    aplikaciju. 
    Slicno vazi i za scenarije poput online kupovine i pracenja potrosacke korpe ili odabira nekih preferencija 
    koje treba odrzati u daljim koriscenjima aplikacije. Mehanizam kojim se grupa HTTP zahteva povezuje u jednu 
    celinu je poznat kao "sesija" i za njegovu implementaciju je potrebna saradnja izmedju veb klijenta i veb 
    servera. Sa stanovista servera, za sve strane koje treba da budu deo jedne sesije, treba da postoji poziv 
    session_start() funkcije koji prethodi generisanom HTML sadrzaju. Sa stanovista klijenta, treba da bude 
    omoguceno cuvanje i slanje informacija, kao sto je identifikator sesije, kako bi se zahtevi koji dolaze 
    od jednog klijenta mogu pratiti. */

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Provera unetih podataka</title>
</head>

<body class="container">
    <?php
    /* 
        
        Prilikom slanja podataka iz formulara koriscen je GET metod pa se prosledjeni podaci mogu pronaci u 
        $_GET nizu. Kljucevi elemenata ovog niza su korisceni name atributi, a vrednosti unosi korisnika. 
        
        Ukoliko su u formular na prethodnoj strani uneti i korisnicko ime i sifra, ima smisla obradjivati 
        podatke. Proveru postojanja ovih vrednosti vrsimo isset funkcijom: 
        https://www.php.net/manual/en/function.isset.php
        
    */

    if (isset($_GET['username']) && isset($_GET['password'])) {

        /* Cuvamo vrednosti korisnickog imena i sifre. */
        $username = $_GET['username'];
        $password = $_GET['password'];

        /* 
            Ukoliko su podaci ispravno uneti, cuvamo ih u $_SESSION nizu. 
            $_SESSION niz je niz koji se cuva i odrzava na veb serveru, a kojem mogu pristupiti svi skriptovi 
            koji su deo jedne sesije. U ovom slucaju nam je neophodan jer zelimo da korisnicko ime i npr. uloga
            ulogovanog korisnika budu dostupne i na preostlim stranama aplikacije. 
        */
        if ($username == 'pera' && $password == 'pera1234') {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['mode'] = 'admin';

            echo "Hello to admin Pera!";
            echo "<br>";
            echo "<a href = '3.php'> You can click here to go to the next page. </a>";
        } else {
            /* Ukoliko podaci nisu uspesno uneti, ispisujemo poruku o gresci. */
            echo "Wrong username and/or password.";
            echo "<br>";
            echo "<a href = '1.php'> Back to the login page. </a>";
        }
    } else {
        echo "Plase go to the login page first: ";
        echo "<a href = '1.php'> here is the link </a>";
        echo ".";
    }

    ?>
</body>

</html>