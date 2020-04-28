var formular = document.getElementById('formular');

formular.onsubmit = function () {
    var greska = document.getElementById('greska');
    var polje;

    // Ime i prezime
    polje = document.getElementById('ime_prezime');
    var imePrezime = polje.value.trim();

    // if(imePrezime.length == 0){
    if (imePrezime === '') {
        greska.textContent = 'Morate uneti ime i prezime';
        return false;
    }

    var maxDuzina = polje.maxLength > 0 ? polje.maxLength : 30;

    if (imePrezime.length > maxDuzina) {
        greska.textContent = 'Predugacko  ime i prezime!';
        return false;
    }


    // Email

    polje = document.getElementById("email");
    var email = polje.value;
    var at = -1,
        tacka = -1;

    for (var i = 0; i < email.length; i++) {
        var karakter = email.charAt(i);
        if (karakter == '@') {
            at = i;
        }

        if (karakter == '.') {
            tacka = i;
        }
    }

    if (at == -1 || tacka == -1 || at > tacka) {
        greska.textContent = 'Neispravnaemail adresa';
        return false;
    }





}