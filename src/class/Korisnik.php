<?php require_once("Database.php"); ?>

<?php

class Korisnik extends Database {


/**
 * string
 */
private $ime;

/**
 * string
 */
private $prezime;

/**
 * string
 */
private $slika;

/**
 * string
 */
private $datum_rodjenja;

/**
 * string
 */
private $korisnicko_ime;

/**
 * string
 */
private $email;

/**
 * string
 */
private $sifra;

/**
 * string
*/
private $pol;


public function __construct(){

    $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $this->connect_to_db();

    $this->test_connection();
}


public function set_korisnik($ime, $prezime, $slika, $datum_rodjenja, $korisnicko_ime, $email, $sifra, $pol){

    $this->ime = $ime;

    $this->prezime = $prezime;

    $this->slika = $slika;

    $this->datum_rodjenja = $datum_rodjenja;

    $this->korisnicko_ime = $korisnicko_ime;

    $this->email = $email;

    $this->sifra = $sifra;

    $this->pol = $pol;
}

public function insert_korisnik(){

    $insert_query = $this->prepare_query("INSERT INTO korisnik(
        ime,
        prezime,
        slika,
        datum_rodjenja,
        korisnicko_ime,
        email,
        sifra,
        pol)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $insert_query->bind_param("ssssssss",
        $this->ime,
        $this->prezime,
        $this->slika,
        $this->datum_rodjenja,
        $this->korisnicko_ime,
        $this->email,
        $this->sifra,
        $this->pol);

    $insert_query->execute();
}



}



?>

