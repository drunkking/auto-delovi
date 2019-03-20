<?php require_once("Database.php"); ?>

<?php

class Proizvod extends Database {

    /**
     * string
     */
    private $naziv;

    /**
     * string
     */
    private $proizvodjac;

    /**
     * string
     */
    private $za_vozila;

    /**
     * string
     */
    private $slika;

    /**
     * double
     */
    private $cena;

    
    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();
    }

    public function set_proizvod($naziv, $proizvodjac, $za_vozila, $slika, $cena){

        $this->naziv = $naziv;

        $this->proizvodjac = $proizvodjac;

        $this->za_vozila = $za_vozila;

        $this->slika = $slika;

        $this->cena = $cena;
    }


    public function insert_proizvod(){

        $insert_query = $this->prepare_query("INSERT INTO proizvod(
            naziv,
            proizvodjac,
            za_vozila,
            slika,
            cena)
            VALUES (?, ?, ?, ?, ?)");

        $insert_query->bind_param("sssss",
            $this->naziv,
            $this->proizvodjac,
            $this->za_vozila,
            $this->slika,
            $this->cena);

        $insert_query->execute();
    }
}


?>