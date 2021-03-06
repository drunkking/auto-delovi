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

    /**
     * int
     */
    private $sifra_kategorije;

    /**
     * int
     */
    private $stanje;

    
    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();
    }

    public function set_proizvod($naziv, $proizvodjac, $za_vozila, $slika, $cena, $sifra_kategorije, $stanje){

        $this->naziv = $naziv;

        $this->proizvodjac = $proizvodjac;

        $this->za_vozila = $za_vozila;

        $this->slika = $slika;

        $this->cena = $cena;

        $this->sifra_kategorije = $sifra_kategorije;

        $this->stanje = $stanje;
    }


    public function insert_proizvod(){

        $insert_query = $this->prepare_query("INSERT INTO proizvod(
            naziv,
            proizvodjac,
            za_vozila,
            slika,
            cena,
            sifra_kategorije,
            stanje)
            VALUES (?, ?, ?, ?, ?, ?, ?)");

        $insert_query->bind_param("ssssdii",
            $this->naziv,
            $this->proizvodjac,
            $this->za_vozila,
            $this->slika,
            $this->cena,
            $this->sifra_kategorije,
            $this->stanje);

        $insert_query->execute();
    }


    public function all_proizvod(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM proizvod");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
        
    }

    public function all_proizvod_s($data){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM proizvod
            WHERE naziv LIKE '%$data%'");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
        
    }




    public function update_proizvod_id($sifra){

        $update_query = $this->prepare_query("UPDATE proizvod SET
            naziv = (?),
            proizvodjac = (?),
            za_vozila = (?),
            slika = (?),
            cena = (?),
            sifra_kategorije = (?),
            stanje = (?)
            WHERE sifra_proizvoda = $sifra");

        $update_query->bind_param("ssssdii", 
            $this->naziv, 
            $this->proizvodjac, 
            $this->za_vozila, 
            $this->slika, 
            $this->cena,
            $this->sifra_kategorije,
            $this->stanje);

        $update_query->execute();
    }

    public function return_proizvod_id($sifra){

        $select_query = $this->set_query("SELECT naziv,
            proizvodjac,
            za_vozila,
            slika,
            cena,
            sifra_kategorije,
            stanje
            FROM proizvod
            WHERE sifra_proizvoda = $sifra");

        while($row = $select_query->fetch_assoc()){
            $result = $row;
        }

        return $result;
    }

    public function all_proizvod_kategorija($sifra_kategorije){

        $result = array();

        $select_query = $this->set_query("SELECT * 
            FROM proizvod 
            WHERE sifra_kategorije = $sifra_kategorije");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }


    public function trazeno($sifra_kategorije, $data){

        $result = array();

        $select_query = $this->set_query("SELECT *
            FROM proizvod
            WHERE sifra_kategorije = $sifra_kategorije 
            AND  naziv LIKE '%$data%'");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }


    
    public function odobri_proizvod($sifra_proizvoda, $kolicina){

        // ODOBRI PROIZVOD

        $update_query = $this->prepare_query("UPDATE proizvod SET
            stanje = stanje - (?)
            WHERE sifra_proizvoda = (?)");

        $update_query->bind_param("ii",
            $kolicina,
            $sifra_proizvoda);

        $update_query->execute();


        // AZURIRAJ PROFIFT 
        //zaradjujem 38% od vrednosti proizvoda sa pdv-om

        $cena_proizvoda = $this->cena_proizvoda_id($sifra_proizvoda);

        $profit = $kolicina * ($cena_proizvoda['cena'] * 0.38);

        $insert_query = $this->prepare_query("INSERT INTO racun(
            profit)
            VALUES (?)");

        $insert_query->bind_param("d",
            $profit);

        $insert_query->execute();

    }

    public function return_profit(){

        $result = array();

        $select_query = $this->set_query("SELECT SUM(profit) as prof
            FROM racun");

        while($row = $select_query->fetch_assoc()){
            $result = $row;
        }

        return $result;

    }

    public function cena_proizvoda_id($sifra_proizvoda){

        $result = array();

        $select_query = $this->set_query("SELECT cena
            FROM proizvod 
            WHERE sifra_proizvoda = $sifra_proizvoda");

        while($row = $select_query->fetch_assoc()){
            $result = $row;
        }

        return $result;

    }



    public function delete_proizvod_id($sifra){

        $delete_query = $this->prepare_query("DELETE 
            FROM proizvod 
            WHERE sifra_proizvoda = (?)");

        $delete_query->bind_param("i", $sifra);

        $delete_query->execute();


    }


}




?>