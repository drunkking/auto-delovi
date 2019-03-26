<?php require_once("Database.php"); ?>

<?php

class StavkaNarudzbenice extends Database {

    /**
     * integer
     */
    private $sifra_narudzbenice;

    /**
     * integer
    */
    private $sifra_proizvoda;


    /**
     * integer
     */
    private $kolicina;


    public function __construct(){

        $this->set_parameters(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $this->connect_to_db();

        $this->test_connection();

    }


    public function set_stavka_narudzbenice($sifra_narudzbenice, $sifra_proizvoda, $kolicina){

        $this->sifra_narudzbenice = $sifra_narudzbenice;

        $this->sifra_proizvoda = $sifra_proizvoda;

        $this->kolicina = $kolicina;
    }

    public function insert_stavka_narudzbenice(){

        $insert_query = $this->prepare_query("INSERT INTO stavka_narudzbenice(
            sifra_narudzbenice,
            sifra_proizvoda,
            kolicina)
            VALUES(?, ?, ?)");

        $insert_query->bind_param("iii",
            $this->sifra_narudzbenice,
            $this->sifra_proizvoda,
            $this->kolicina);

        $insert_query->execute();
    }

}




?>