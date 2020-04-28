<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formular za prijavljivanje</title>
</head>

<body class="container">
    <!-- 
        Sadrzaj popunjenog formulara ce se metodom GET (kroz dopunjenu URL liniju) proslediti strani 2.php.
        Podaci koji se salju iz formulara su korisnicko ime i sifra. Korisnicko ime ce biti smesteno u 
        globalni $_GET niz od strane veb servera pod kljucem "username", a sifra pod kljucem "password",
        u skladu sa koriscenim name atributima elemenata formulara. 

        U praksi bi bilo prirodnije podatke iz formulara slati metodom POST (kroz telo zahteva)
        jer je vidljivost podataka, poput sifre, pod vecom kontrolom. Ovde je koriscen GET metod zbog
        lakseg pracenja aktivnosti. 

        Podaci iz formulara ce se poslati onog trenutka kada korisnik klikne na submit dugme formulara.
    -->

    <form action="2.php" method="GET">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="username">
            <small id="usernameHelp" class="form-text text-muted">Test korisničko ime je pera.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <small id="passwordHelp" class="form-text text-muted">Test šifra je pera1234.</small>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>

</html>