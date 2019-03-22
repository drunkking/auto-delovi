<?php require_once("../class/Proizvod.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["proizvod"])){

    $obj_proizvod = json_decode($_POST["proizvod"], false);

    $proizvod = new Proizvod();
    $proizvod->delete_proizvod_id($obj_proizvod->sifra);

    $svi_proizvodi = $proizvod->all_proizvod();
    $proizvod_json = json_encode($svi_proizvodi);

    echo $proizvod_json;
}


?>