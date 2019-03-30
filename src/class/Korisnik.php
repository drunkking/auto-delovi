<?php require_once("Database.php"); ?>

<? session_start(); ?>
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

/**
 * int
 */
private $sifra_uloge;


public function __construct(){

    $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $this->connect_to_db();

    $this->test_connection();
}


public function login(){


    $result = array();

    $login_query = $this->set_query("SELECT * FROM  korisnik WHERE  korisnicko_ime = '{$this->korisnicko_ime}' ");

    while($row = $login_query->fetch_assoc()){
        $result = $row;
    }

    
    $temp_korisicko = $result['korisnicko_ime'];
    $temp_sifra = $result['sifra'];

    if($temp_korisicko === $this->korisnicko_ime && password_verify($this->sifra, $temp_sifra)){
            
        $_SESSION['spec'] = $temp_korisicko;

            if($result['sifra_uloge'] == 1){
                header("Location: ../../template/admin/admin.php");
                
            }

            if($result['sifra_uloge'] == 2){
                header("Location: https://www.youtube.com");
            }
               
            
    }


  
}

public function set_korisnik_login($username, $sifra){

    $this->korisnicko_ime = $username;

    $this->sifra = $sifra;
}

public function set_korisnik($ime, $prezime, $slika, $datum_rodjenja, $korisnicko_ime, $email, $sifra, $pol, $sifra_uloge){

    $this->ime = $ime;

    $this->prezime = $prezime;

    $this->slika = $slika;

    $this->datum_rodjenja = $datum_rodjenja;

    $this->korisnicko_ime = $korisnicko_ime;

    $this->email = $email;

    $this->sifra = $sifra;

    $this->pol = $pol;

    $this->sifra_uloge = $sifra_uloge;
}

public function insert_korisnik(){

    $hash_sifra = password_hash($this->sifra, PASSWORD_DEFAULT);

    $insert_query = $this->prepare_query("INSERT INTO korisnik(
        ime,
        prezime,
        slika,
        datum_rodjenja,
        korisnicko_ime,
        email,
        sifra,
        pol,
        sifra_uloge)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $insert_query->bind_param("ssssssssi",
        $this->ime,
        $this->prezime,
        $this->slika,
        $this->datum_rodjenja,
        $this->korisnicko_ime,
        $this->email,
        $hash_sifra,
        $this->pol,
        $this->sifra_uloge);

    $insert_query->execute();
}


public function all_korisnik(){

    $result = array();

    $select_query = $this->set_query("SELECT * FROM korisnik");

    while($row = $select_query->fetch_assoc()){
        $result[] = $row;
    }

    return $result; 
}


public function update_korisnik_id($sifra){

    $hash_sifra = password_hash($this->sifra, PASSWORD_DEFAULT);

    $update_query = $this->prepare_query("UPDATE korisnik SET
        ime = (?),
        prezime = (?),
        slika = (?),
        datum_rodjenja = (?),
        korisnicko_ime = (?),
        email = (?),
        sifra = (?),
        pol = (?),
        sifra_uloge = (?) 
        WHERE sifra_korisnika = $sifra");

    $update_query->bind_param("ssssssssi",
        $this->ime,
        $this->prezime,
        $this->slika,
        $this->datum_rodjenja,
        $this->korisnicko_ime,
        $this->email,
        $hash_sifra,
        $this->pol,
        $this->sifra_uloge);



    $update_query->execute();
}


public function return_korisnik_id($sifra){


    $select_query = $this->set_query("SELECT ime,
        prezime,
        slika,
        datum_rodjenja,
        korisnicko_ime,
        email,
        sifra,
        pol
        FROM korisnik 
        WHERE sifra_korisnika = $sifra");

    while($row = $select_query->fetch_assoc()){
        $result = $row;
    }

    return $result;
}


public function delete_korisnik_id($sifra){

    $delete_query = $this->prepare_query("DELETE
        FROM korisnik
        WHERE sifra_korisnika = (?)");

    $delete_query->bind_param("i", $sifra);

    $delete_query->execute();
}



}



?>

