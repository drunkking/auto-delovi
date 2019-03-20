<?php require_once("../class/Proizvod.php"); ?>


<?php

header("Content-Type: application/json; charset=UTF-8");



if(!empty($_POST["proizvod"])){


    $obj_proizvod = json_decode($_POST["proizvod"], false);


    $prozvod = new Proizvod();
    $prozvod->set_proizvod(
        $obj_proizvod->naziv,
        $obj_proizvod->proizvodjac,
        $obj_proizvod->za_vozila,
        $obj_proizvod->slika,
        $obj_proizvod->cena
    );
    $prozvod->insert_proizvod();


    $arr = array(
        "status"=>"ok"
    );

    echo json_encode($obj_proizvod);
}







?>