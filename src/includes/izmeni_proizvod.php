<?php require_once("../class/Proizvod.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["proizvod"])){

    $obj_proizvod = json_decode($_POST["proizvod"], false);

    $proizvod = new Proizvod();
    $proizvod->set_proizvod(
        $obj_proizvod->naziv,
        $obj_proizvod->proizvodjac,
        $obj_proizvod->za_vozila,
        $obj_proizvod->slika,
        $obj_proizvod->cena,
        $obj_proizvod->sifra_kategorije
    );
    $proizvod->update_proizvod_id($obj_proizvod->sifra);

    $arr = array(
        "status"=>"ok"
    );

    echo json_encode($arr);
}

?>
