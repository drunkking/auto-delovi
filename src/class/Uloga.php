<?php require_once("Database.php"); ?>

<?php

class Uloga extends Database {

    /**
     * string
     */
    private $naziv;

    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();
    }

    public function set_uloga($naziv){
        
        $this->naziv = $naziv;
    }

    public function insert_uloga(){

        $insert_qurey = $this->prepare_query("INSERT INTO uloga(
            naziv)
            VALUES (?)");
        
        $insert_qurey->bind_param("s",
            $this->naziv);

        $insert_qurey->execute();
    }

    public function all_uloga(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM uloga");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    public function delete_uloga_id($sifra){

        $delete_query = $this->prepare_query("DELETE
            FROM uloga
            WHERE sifra_uloge = (?)");
        
        $delete_query->bind_param("i", $sifra);

        $delete_query->execute();
    }
}


?>