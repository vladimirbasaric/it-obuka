<?php
/* 
    Zapocinjemo sesiju pozivom funkcije session_start(). 
    Poziv funkcije session_start() treba da prethodi generisanom HTML sadrzaju. 
*/ 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sesije - korisničke preferencije - strana sa formularom </title>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class='container'>
    <!-- Klikom na submit dugme, pregledac salje podatke skriptu cija se URL adresa (ili putanja) zadaju preko action atributa. 
    Ako se kao vrednost action atributa postavi prazna niska '' ili '#' podaci ce biti obradjeni skriptovima na tekucoj strani. 
    U vezi sa ovim treba voditi racuna da ce se tekuca strana (1.php u nasem slucaju) prikazati dva puta krajnjem korisniku - prvi put 
    pre klika na submit dugme, i drugi put, nakon klika na submit dugme. Zbog toga smo i submit dugmetu pridruzili 
    name atribut kako bismo mogli da pratimo njegovo postojanje u $_GET nizu. Podsecanje je da se svi podaci iz formulara metodom GET
    salje u obliku stringa parova ime_elementa_1=vrednost_1&ime_elementa_2=vrednost_2&....  koje veb server dalje izdvaja u pojedinacne parove
    cijim vrednostima popunjava $_GET niz (na primer $_GET['ime_elementa_1'] = vrednost_1, $_GET['ime_elementa_2'] = vrednost_2, ... ). 
    -->
    <form action='' method='GET'>
        <div>
            <h4> Veličina slova: </h4>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fontSize" id="fontSize14" value="14"
                <?php
                    /* Ovo je deo koda koji se moze iskoristiti za cuvanje obelezenih opcija prilikom drugog prikaza strane. */
                    /* Prvo proveravamo da li se sadrzaj prikazuje drugi put i da li je navedena velicina slova. */
                    if(isset($_GET['savePreferencesButton']) && isset($_GET['fontSize'])){
                        /* Zatim proveravamo i da li odabrana velicina slova odgovara tekucoj velicini slova. */
                        if($_GET['fontSize'] == '14'){
                            /* Ako je to slucaj stampamo atribut checked koji naglasava da je polje obelezeno. */
                            echo ' checked ';
                        }
                    }

                    /* Kod u ovoj formi sa zeljenim vrednostima bi trebalo navesti uz svaku radio opciju. */
                ?>
                >
                <label class="form-check-label" for="fontSize14">14px</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fontSize" id="fontSize20" value="20">
                <label class="form-check-label" for="fontSize20">20px</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fontSize" id="fontSize25" value="25">
                <label class="form-check-label" for="fontSize25"> 25px</label>
            </div>
        </div>

        <div>
            <h4> Boja slova: </h4>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="color" id="colorOrange" value="orange">
                <label class="form-check-label" for="colorOrange"><span class='square orange'></span></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="color" id="colorBlue" value="cadetblue">
                <label class="form-check-label" for="colorBlue"><span class='square cadetblue'></span></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="color" id="colorGray" value="gray">
                <label class="form-check-label" for="colorGray"> <span class='square gray'></span> </label>
            </div>
        </div>

        <div>
            <input type='submit' name='savePreferencesButton' class='btn btn-primary' value='Sačuvaj preferencije'>
        </div>
    </form>

    <br>
    <br>

    <?php
    $style = '';

    /* 
        Proveravamo da li se strana 1.php prikazuje korisniku nakon klika na submit dugme navodjenjem uslova
        isset($_GET['savePreferencesButton']). Dodatni uslovi nam omogucavaju da proverimo da li je korisnik 
        odabrao polja formulara. 
    */
    if (isset($_GET['savePreferencesButton']) && isset($_GET['color']) && isset($_GET['fontSize'])) {

        /* Ako je to slucaj, citamo izbor boje i cuvamo informaciju u $_SESSION nizu. */
        $color = $_GET['color'];
        $_SESSION['color'] = $color;

        /* Slicno, citamo izbor velicine slova i cuvamo informaciju u $_SESSION nizu. */
        $fontSize = $_GET['fontSize'];
        $_SESSION['fontSize'] = $fontSize;
    }

    /* Proveravamo da li je na nivou sesije sacuvana informacija o boji i velicini slova. */
    if (isset($_SESSION['color']) && isset($_SESSION['fontSize'])) {

        /* Ako je to slucaj (korisnik pregleda stranu nakon klika na submit dugme ili se vratio na nju sa 
        strana 2.php ili 3.php) generisemo odgovarajuce stilove. */

        /* Za boju slova formiramo string oblika color:sacuvana_boja; */
        $colorStyle = 'color:' . $_SESSION['color'] . ';';

        /* Za velicinu slova formiramo string oblika font-size:sacuvana_velicina_slova px; */
        $fontStyle = 'font-size:' . $_SESSION['fontSize'] . 'px;';

        /* Na osnovu prethodno formiranih stringova formiramo string oblika 
            style='color:sacuvana_boja;font-size:sacuvana_velicina_slova px;'
            koji predstavlja korektan style atribut elementa. */
        $style = "style = '" . $colorStyle . $fontStyle . "'";
    }

    ?>
    <div>
        <!-- Ispisujemo formirani style atribut prilikom prikaza pasusa. -->
        <p <?php echo $style; ?>>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <div style='margin-top: 40px;'>
        <a href='2.php'> 2.php </a>
        <a href='3.php'> 3.php </a>
    </div>
</body>

</html>