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
}


?>