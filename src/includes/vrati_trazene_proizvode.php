<?php  require_once("../class/Proizvod.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["trazi"])){

    $data_obj = json_decode($_POST["trazi"], false);

    $proizvod = new Proizvod();

    $trazeni_proizvodi = $proizvod->trazeno(
        $data_obj->sifra_kategorije,   //sifra odabrane kategorije
        $data_obj->data);              //podaci za pretragu

    
    echo json_encode($trazeni_proizvodi);
}


?>