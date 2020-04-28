<?php

/*          
            Petlje nam sluze za ponavljanje istih 
			instrukcija odredjen broj puta. 

			Naredba for je jedna od petlji. Njena sintaksa 
			je sledeca:
			for(naredba1; naredba2; naredba3) {
				... instrukcije...
			}
		
			Svaka od tri naredbe unutar zagrada ima svoju ulogu i vreme kada ce biti izvrsena.

			Prva naredba odnosi se na inicijalizaciju 
			promenljivih koje koristimo za kontrolu 
			izvrsavanja petlje - tzv. brojaci petlje. 
			Ova naredba se izvrsava tacno jednom na samom 
			pocetku petlje tj. pre prve iteracije. 

			Druga naredba predstavlja uslov petlje. Uslov 
			koji postavimo odredjuje koliko ce iteracija 
			biti izvrseno. Provera uslova vrsi se pre 
			pocetka svake iteracije. Ako je uslov ispunjen 
			instrukcije se izvrsavaju, u suprotom se 
			prekida petlja, a izvrsavanje programa 
			nastavlja ispod petlje.

			Treca naredba sluzi za promenu vrednosti 
			brojaca petlje. Obicno je to neka 
			inkrementacija ili dekrementacija, a mogu biti 
			i drugacije izmene vrednosti. Ova naredba 
			izvrsava se na kraju svake iteracije.
*/

for($brojac = 0; $brojac < 10; $brojac++)
    // u novi red se prelazi ispisom niske "<br>"
    // sa , mozemo zadati vise vrednosti funkciji echo
    echo "Zdravo iz for",  "<br>";
    // isti efekat: echo "Zdravo <br>";
 
	
/*
			While je jos jedna od naredbi kontrole toka koja nam omogucava ponavljanje istih instrukcija odredjen broj puta.

			Sintaksa je sledeca:
				while (uslov) {
					...instrukcije...
				}

			Nakon kljucne reci while u zagradama navodimo uslov za izvrsavanje petlje. Slicno kao kod for petlje, ukoliko je uslov ispunjen izvrsava se jedna iteracija, u suprotnom se petlja zavrsava.

			Za razliku od for petlje, while petlja ima samo uslov koji se proverava na pocetku svake iteracije. Deklaracija, inicijalizacija i izmena vrednosti brojaca mora posebno da se doda.
*/ 

// inicijalizacija brojaca
$brojac = 0;

while($brojac < 10){
    echo "Zdravo iz while",  "<br>";
	// nakon ispisa, uvecavamo brojac
	$brojac++;
}

/*
			Sintaksa za do while petlju je sledeca:
				do {
					...instrukcije...
				}while (uslov);

			Nakon kljucne reci do u zagradama navodimo instrukcije za cim sledi 
			kljucna rec while sa uslovom za izvrsavanje naredne iteracije petlje. 
	
			Uslov za izvrsavanje petlje se proverava tek nakon izvrsene prve 
			iteracije. Ukoliko je uslov ispunjen izvrsava se naredna iteracija, u suprotnom se petlja zavrsava.

			Za razliku od while i for petlje, kod do while petlje
			se uvek izvrsava bar jedna iteracija jer se za nju ne proverava uslov.
*/ 
// inicijalizacija brojaca
$brojac = 0;

do{
    echo "Zdravo iz do while",  "<br>";
	// nakon ispisa, uvecavamo brojac
	$brojac++;
}while($brojac < 10);



?>