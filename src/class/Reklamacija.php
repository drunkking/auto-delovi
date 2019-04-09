<?php require_once("Database.php"); ?>

<?php

class Reklamacija extends Database {

    /**
     * string
     */
    private $email;


    /**
     * string
     */
    private $poruka;

    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        $this->connect_to_db();
    
        $this->test_connection();
    }

    public function set_reklamacija($email, $poruka){

        $this->email = $email;

        $this->poruka = $poruka;
    }


    public function all_reklamacija(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM  reklamacija");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    public function insert_reklamacija(){

        $insert_query = $this->prepare_query("INSERT INTO reklamacija(
            email,
            poruka)
            VALUES (?, ?)");
        
        $insert_query->bind_param("ss",
            $this->email,
            $this->poruka);

        $insert_query->execute();
    }


    public function delete_reklamacija_id($sifra){

        $delete_query = $this->prepare_query("DELETE
            FROM reklamacija
            WHERE sifra_reklamacije = (?)");

        $delete_query->bind_param("i", $sifra);

        $delete_query->execute();
    }

}


?>