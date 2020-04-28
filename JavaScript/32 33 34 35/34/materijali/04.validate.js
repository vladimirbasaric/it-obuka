$(document).ready(() => {
    // Reference na kontrole o formularu
    let formUsername = $('#username');
    let formEmail = $('#userEmail');
    let formPassword = $('#userPassword');
    let formRepeatedPassword = $('#repeatedPassword');
    let formSubscribe = $('#subscribe');

    // Reference na poruke o greskama
    let errorUsername = $('#errorUsername');
    let errorEmail = $('#errorEmail');
    let errorPassword = $('#errorPassword');
    let errorRepeatedPassword = $('#errorRepeatedPassword');

    // Pakujemo poruke i u niz za slucaj da zelimo odjednom da primenimo
    // izmene nad svim porukama.
    let errors = [errorUsername, errorEmail, errorPassword, errorRepeatedPassword];

    function hideAllErrorMessages() {
        // Funkcija sakriva se poruke o greskama. Koristi se JQuery metod hide().
        errors.forEach(errMsg => errMsg.hide());
        // errors.forEach((errMsg) => { errMsg.hide(); });
    }

    function validateUsername(username) {
        // Funkcija prihvata username i validira ga.
        // U nasem slucaju to obuhvata proveru da username
        // sadrzi barem 4 karaktera.
        // Pre nego sto proverimo duzinu karaktera, ima smisla
        // pozvati trim i ocistiti sve suvisne beline na pocetku i kraju stringa.
        return username.trim().length >= 4;
    }

    function validateEmail(email) {
        // Validacija email adresa je posebna prica, i da bi se pravilno uradila potrebno
        // je da koristimo regularne izraze. Kako su oni nesto kompleksnija tema koja nam
        // nije neophodna, necemo se time baviti detaljno sada. Regularni izrazi su nacin
        // da kroz tekst opisemo neki sablon. U nasem slucaju, email adresa je tekst
        // oblika IME@SERVER.X (gde je X nesto poput com i slico). Sledi primer koji jednostavnim
        // regularnim izrazom proverava email adresu, ali ovo nije neophodno da znate kako radi.
        let re = /\S+@\S+\.\S+/;

        // Funkcija test proverava da li string 'email' odgovara email adresi.
        // Odnosno re.test('itobuka@gmail.com') vraca true, a re.test('pera') vraca false.
        return re.test(email);
    }

    function validatePassword(password) {
        // Validira lozinku tako sto proverava da li ima barem 8 karaktera
        // i da li sadrzi barem jednu cifru.
        let lengthCheck = password.length >= 8;

        let digitCounter = 0;
        for (let i = 0; i < password.length; i++) {
            // Uzimamo tekuci karakter u stringu.
            let c = password.charAt(i);

            // Proveravamo da li je cifra i brojimo ako jeste.
            if (c >= '0' && c <= '9') {
                digitCounter++;
            }
        }

        return lengthCheck && (digitCounter > 0);
    }

    function validatePasswordMatch(password1, password2) {
        return password1 === password2;
    }

    function validator(formElement, fnValidation, errorMsg) {
        let contentStatus = fnValidation(formElement.val());
        if (contentStatus) {
            errorMsg.hide();
        } else {
            errorMsg.show();
        }
    }

    // Validacija korisnickog imena
    formUsername.on('input', () => {
        validator(formUsername, validateUsername, errorUsername);
    });

    // Validacija email adrese
    formEmail.on('input', () => {
        validator(formEmail, validateEmail, errorEmail);
    });

    // Validacija lozinke
    formPassword.on('input', () => {
        validator(formPassword, validatePassword, errorPassword);
    });

    // Da li se lozinke poklapaju?
    formRepeatedPassword.on('input', () => {
        let passwordsMatch = validatePasswordMatch(formPassword.val(), formRepeatedPassword.val());
        if (passwordsMatch) {
            errorRepeatedPassword.hide();
        } else {
            errorRepeatedPassword.show();
        }
    });

    $('#formSubmit').click(() => {
        // Proveravamo korisnicko ime
        // .val() cita sadrzaj elementa formulara. Primetite da ne koristimo .text().
        let contentUsername = formUsername.val();
        let contentEmail = formEmail.val();
        let contentPassword = formPassword.val();
        let contentRPassword = formRepeatedPassword.val();
        let contentSub = formSubscribe.is(':checked');

        if (validateUsername(contentUsername) &&
            validateEmail(contentEmail) &&
            validatePassword(contentPassword) &&
            validatePasswordMatch(contentPassword, contentRPassword)
        ) {
            // Prosle su sve validacije, mozemo da saljemo podatke na server - jos uvek lazno :)
            let data = {
                'username': contentUsername,
                'password': contentPassword,
                'email': contentEmail,
                'subscribe': contentSub,
            };
            console.log("Salju se podaci na server");
            console.log(data);
        } else {
            console.log("Neuspelo slanje podataka na server je nisu prosle sve provere!");
            alert("Neuspelo slanje podataka na server je nisu prosle sve provere!");
        }
    });

    // Inicijalno sakrivamo sve poruke o greskama.
    hideAllErrorMessages();
});