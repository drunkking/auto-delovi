<?php  require_once("../class/Proizvod.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["trazi"])){

    $data_obj = json_decode($_POST["trazi"], false);

    $proizvod = new Proizvod();

    if($data_obj->sifra_kategorije == 0){

        $trazeni_proizvodi = $proizvod->all_proizvod_s($data_obj->data);

    } else {

        
    $trazeni_proizvodi = $proizvod->trazeno(
        $data_obj->sifra_kategorije,   //sifra odabrane kategorije
        $data_obj->data);              //podaci za pretragu

    }


    
    echo json_encode($trazeni_proizvodi);
}


?>