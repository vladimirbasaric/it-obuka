<?php
/*
* Mysql database class - only one connection alowed
*/
class Database {
    // Promenljive kojima cemo vrsiti konekciju ka bazi podataka i kontrolu
    // pristupa ovoj klasi.

    // Ova promenljiva ce drzati konekciju ka bazi podataka.
    private $_connection;
    
    // Staticka promenljiva ce se koristiti da se cuva indikator o tome koliko
    // objekata ove klase je alocirano. Ovo je SINGLETON klasa, odnosno klasa
    // za koju je dozvoljeno imati najvise 1 instanciran objekat.
    private static $_instance;
    
    // Parametri za konfiguraciju baze podataka
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "kazivanje430";
    private $_database = "blok54";

    /*
    Ovo je funkcija koja ce se u skriptama koristit da se dobija instanca ove klase.
    Obratite paznju da je staticka, odnosno poziva se nad KLASOM, ne nad objektom.
    @return Instance
	*/
    public static function getInstance()
    {
        // Ako staticka promenljiva $_instance nije instancirana,
        // onda cemo je instancirati mi.
        if (! self::$_instance)
        {
            // self oznacava TEKUCU KLASU -> Odnosno klasu Database.
            // Mogli smo napisati i:
            // Database::$_instance = new Database();
			self::$_instance = new self();
        }
        
        // Vracamo korisniku instancu ove klase.
		return self::$_instance;
    }

	// Konstruktor nase klase
	private function __construct() {
        // Pri konstrukciji objekta ove klase, otvaramo konekciju ka bazi.
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
        // Ukoliko dodje do greske, obradjujemo je.
        if (mysqli_connect_error())
        {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
		}
    }

    // Implementiramo magicni metod __clone kako bi zabraniili kloniranje objekta klase Database.
    private function __clone()
    {

    }

	// Daje nam konekciju ka bazi podataka.G
	public function getConnection() {
		return $this->_connection;
	}
}