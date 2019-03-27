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

        $select_query = $this->set_query("SELECT * FROM narudzbenica");

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


        $select_sifra = $this->set_query("SELECT sifra_narudzbenice 
            FROM narudzbenica 
            WHERE sifra_interna = $this->sifra_interna");

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

        $this->set_sifra_narudzbenice();

    }

}

/*

$nar = new Narudzbenica();


$nar->set_narudzbenica("2016",1,436);
$nar->insert_narudzbenica();

for($i = 1; $i < 4; $i++){

    $stavka = new StavkaNarudzbenice();
    $stavka->set_stavka_narudzbenice($nar->sifra_narudzbenice, 1, $i);
    $nar->push_stavka($stavka);
}


$nar->insert_stavka_all();

*/


?>