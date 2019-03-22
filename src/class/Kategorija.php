<?php require_once("Database.php"); ?>


<?php

class Kategorija extends Database {

    /**
     * string
     */
    private $naziv;

    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        $this->connect_to_db();
    
        $this->test_connection();
    }

    public function set_kategorija($naziv){
    
        $this->naziv = $naziv;
    }

    public function insert_kategorija(){

        $insert_query = $this->prepare_query("INSERT INTO kategorija(naziv)
            VALUES (?)");
        
        $insert_query->bind_param("s",
            $this->naziv);
        
        $insert_query->execute();
    }


    public function all_kategorija(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM kategorija");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }


    public function return_kategorija_id($sifra){

        $select_query = $this->set_query("SELECT naziv
            FROM kategorija
            WHERE sifra_kategorije = $sifra");

        while($row = $select_query->fetch_assoc()){
            $result = $row;
        }

        return $result;
    }
}


?>