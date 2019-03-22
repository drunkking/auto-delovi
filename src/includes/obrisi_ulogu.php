<?php require_once("../class/Uloga.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["uloga"])){

    $obj_uloga = json_decode($_POST["uloga"], false);

    $uloga = new Uloga();
    $uloga->delete_uloga_id($obj_uloga->sifra);

    $sve_uloge = $uloga->all_uloga();
    $uloga_json = json_encode($sve_uloge);

    echo $uloga_json;
}



?>