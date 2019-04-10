<?php require_once("Database.php"); ?>
<?php require_once("StavkaNarudzbenice.php"); ?>

<?php

class Narudzbenica extends Database {

    /**
     * integer
     */
    public $sifra_narudzbenice;

    /**
     * string
     */
    private $datum_narucivanja;

    /**
     * integer
     */
    private $sifra_korisnika;

    /**
     * integer
     */
    private $sifra_interna;

    /**
     * array
     */
    private $niz_stavki = [];



    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();


    }


    public function push_stavka($stavka_narudzbenice){

        array_push($this->niz_stavki, $stavka_narudzbenice);

    }

    public function insert_stavka_all(){

        foreach($this->niz_stavki as $stavka){
            $stavka->insert_stavka_narudzbenice();
        }
    }


    public function  all_narudzbenica(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM narudzbenica
            WHERE stat = 0");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    public function all_narudzbenica_user($sifra_korisnika){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM narudzbenica
            WHERE sifra_korisnika = $sifra_korisnika
            AND stat = 0");
        
        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    public function  odobrena_narudzbenica(){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM narudzbenica
                    WHERE stat = 1");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }

    public function  odobrena_narudzbenica_user($sifra_korisnika){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM narudzbenica
                    WHERE stat = 1 
                    AND sifra_korisnika = $sifra_korisnika");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;
    }




    
    public function set_narudzbenica($datum_narucivanja, $sifra_korisnika, $sifra_interna){

        $this->datum_narucivanja = $datum_narucivanja;

        $this->sifra_korisnika = $sifra_korisnika;

        $this->sifra_interna = $sifra_interna;

    }


    
    public function set_sifra_narudzbenice(){
     
        $sif = $this->sifra_interna;

        $select_sifra = $this->set_query("SELECT sifra_narudzbenice 
            FROM narudzbenica 
            WHERE sifra_interna = $sif");

        $result = $select_sifra->fetch_assoc();

       $this->sifra_narudzbenice = $result['sifra_narudzbenice'];
    }


    public function insert_narudzbenica(){

        $insert_query = $this->prepare_query("INSERT INTO narudzbenica(
            sifra_interna,
            datum_narucivanja,
            sifra_korisnika) 
            VALUES (?, ?, ?)");

        $insert_query->bind_param("isi",
            $this->sifra_interna,
            $this->datum_narucivanja,
            $this->sifra_korisnika);


        $insert_query->execute();

    }

    public function stavke($sifra_narudzbenice){

        $result = array();

        $select_query = $this->set_query("SELECT * FROM stavka_narudzbenice 
            WHERE sifra_narudzbenice = $sifra_narudzbenice");

        while($row = $select_query->fetch_assoc()){
            $result[] = $row;
        }

        return $result;

    }



    public function odobri_narudzbenicu($sifra_narudzbenice){

        $update_query = $this->prepare_query("UPDATE narudzbenica SET
            stat = 1 
            WHERE sifra_narudzbenice = (?)");
        
        $update_query->bind_param("i",
            $sifra_narudzbenice);

         $update_query->execute();
    }

    public function delete_narudzbenica_id($sifra_narudzbenice){

        $query = $this->set_query("SET foreign_key_checks = 0");

        $delete_query = $this->prepare_query("DELETE 
            FROM narudzbenica
            WHERE sifra_narudzbenice = (?)");

        $delete_query->bind_param("i", $sifra_narudzbenice);

        $delete_query->execute();

        $query = $this->set_query("SET foreign_key_checks = 1");
    }

}




?>