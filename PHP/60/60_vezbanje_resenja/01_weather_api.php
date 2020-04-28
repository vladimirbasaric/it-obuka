<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather API demo </title>

    <style>
        span {
            color: orange;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php

    /* 
    Na osnovu dokumentacije o tekucim meteo uslovima https://openweathermap.org/current formiramo odgovarajuci URL: 
    dodatak q=Belgrade,RS nam omogucava da dobijemo informaciju o Beogradu u Republici Srbiji
    dodatak units=metric nam omogucava da temperatura bude izrazena u celzjusima
    dodatak appid=c99462c11094a34169c43ce7163b19ee nam omogucava da zadamo nas kljuc za koriscenje API-ja
    */
    $url = "api.openweathermap.org/data/2.5/weather?q=Belgrade,RS&units=metric&appid=c99462c11094a34169c43ce7163b19ee";

    /* 
    Pomocu skupa curl funkcija, PHP ima mogucnost komuniciranja sa drugim serverima u duhu HTTP protokola.  
    Da bi se ova komunikacija ostvarila, potrebno je kreirati curl klijenta funkcijom curl_init, postaviti 
    zeljenje opcije/podesavanja funkcijom curl_setopt, a zatim i aktivirati klijenta curl_exec funkcijom koja 
    ce poslati zahtev i sacekati da odgovor pristigne. Na kraju, klijenta je pozeljno odjaviti funkcijom curl_close.

    Ova komunikacija je po svom toku slicna slanju AJAX zahteva.  
    */

    /* Argument funkcije curl_init je url adresa servera kojoj ce HTTP zahtev biti poslat. */
    $client = curl_init($url);
    
    /* 
    Podrazumevani tip zahteva je GET. Ukoliko je potrebno poslati neki drugi zahtev npr. POST, moze se 
    iskoristiti podesavanje curl_setopt($client, CURLOPT_POST, true).
    Spisak svih podesavanje je dostupan na:
    https://www.php.net/manual/en/function.curl-setopt.php
    */

    /* Podrazumevano se odgovor odmah ispise pa je ovo podesavanje neophodno kako bi mogli da ga sacuvamo. */ 
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($client);
    curl_close($client);

    // Test ispis odgovora.
    // echo $response_json;

    // Konvertujemo odgovor u JSON formatu u PHP objekat.
    $response = json_decode($response_json);

    // Test ispis objekta.
    // var_dump($response_obj);

    /* 
    Na osnovu informacija o formatu rezultata https://openweathermap.org/current#current_JSON 
    i znacenju pojedinacnih polja, izdvajamo potrebne informacije. 
    */
    $description = $response->weather[0]->description;
    $icon = $response->weather[0]->icon . ".png";
    $temp = $response->main->temp;

    /* Na kraju, prikazujemo panel sa informacijama. */
    echo "<div>";
    echo "<img src ='http://openweathermap.org/img/w/$icon'>";
    echo "<br>";
    echo "<span>Temperature:</span> $temp &deg;C";
    echo "<br>";
    echo "<span>Description:</span> $description";
    echo "<br>";
    echo "</div>";
    ?>
</body>

</html>