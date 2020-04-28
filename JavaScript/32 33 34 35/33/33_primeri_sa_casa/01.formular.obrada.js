var formular = document.getElementById("formular");

formular.onsubmit = function() {
    var greska = document.getElementById("greska");
    var polje;

    // Ime i prezime
    polje = document.getElementById("ime_prezime");
    var imePrezime = polje.value.trim();

    //if (imePrezime.length == 0) {
    if(imePrezime === "") {
        greska.textContent = "Morate uneti ime i prezime!";
        return false;
    }

    var maxDuzina = polje.maxLength>0? polje.maxLength : 30;

    if (imePrezime.length > maxDuzina) {
        greska.textContent = "Predugacko ime i prezime!";
        return false;
    }

    // Email
    polje = document.getElementById("email");
    var email = polje.value;
    var at = -1, tacka = -1;

    for(var i=0; i<email.length; i++) {
        var karakter = email.charAt(i);
        if(karakter == '@') {
            at = i;
        }

        if(karakter == '.') {
            tacka = i;
        }
    }

    if (at == -1 || tacka == -1 || at > tacka) {
        greska.textContent = "Neispravna email adresa";
        return false;
    }


    // Veb adresa
    polje = document.getElementById("veb_adresa");
    var veb = polje.value.trim();

    if(veb.substr(0, 7) != "http://" && veb.substr(0, 8) != "https://") {
        greska.textContent = "Neispravna veb adresa!"
        return false;
    }

    // Korisnicko ime
    polje = document.getElementById("username");
    var korisnickoIme = polje.value.trim();

    if (korisnickoIme.length == 0) {
        greska.textContent = "Morate uneti korisnicko ime!";
        return false;
    }

    for(var i=0; i<korisnickoIme.length; i++) {
        var karakter = korisnickoIme.charAt(i);

        if (!(karakter >= 'a' && karakter <= 'z') && !(karakter >= 'A' && karakter <= 'Z')) {
            greska.textContent = "Nedozvoljeni karakter u korisnicko ime!";
            return false;
        }
    }

    // Sifra
    polje = document.querySelector("#password");
    var sifra = polje.value;

    if (sifra.length < 5) {
        greska.textContent = "Prekratka sifra!";
        return false;
    }

    var malaSlova = new Array();
    var velikaSlova = new Array();

    for(var i=0; i<26; i++) {
        malaSlova.push(String.fromCharCode(97+i));
        velikaSlova.push(String.fromCharCode(65 + i));
    }

    var cifre = "0123456789";
    var imaMalo = false, imaVeliko = false, imaCifru = false;

    for(var i=0; i<sifra.length; i++) {
        var karakter = sifra.charAt(i);

        if(malaSlova.indexOf(karakter) > -1) {
            imaMalo = true;
        }

        else if (velikaSlova.indexOf(karakter) >= 0) {
            imaVeliko = true;
        }

        else if (cifre.indexOf(karakter) >= 0) {
            imaCifru = true;
        }

    }

    if (!imaMalo || !imaVeliko || !imaCifru) {
        greska.textContent = "Slaba sifra!";
        return false;
    }


    // Fakultet
    polje = document.getElementById("fakultet");

    if (polje.selectedIndex === 0) {
        greska.textContent = "Odaberite fakultet";
        return false;
    }


    // Godina 
    polje = document.querySelectorAll("input[name='godina']");
    var odabran = false;

    for(var i=0; i<polje.length; i++) {
        if(polje[i].checked) {
            odabran = true;
            break;
        }
    }

    if(!odabran) {
        greska.textContent = "Odaberite godinu!";
        return false;
    }
};

formular.onreset = function() {
    var prozor = confirm("Da li ste sigurni?");
    return prozor;
}