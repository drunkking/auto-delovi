<?php require_once("../class/Reklamacija.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["reklamacija"])){

    $obj_reklamacija = json_decode($_POST["reklamacija"], false);

    $reklamacija = new Reklamacija();
    $reklamacija->delete_reklamacija_id($obj_reklamacija->sifra);

    $sve_reklamacije = $reklamacija->all_reklamacija();
    $reklamacija_json = json_encode($sve_reklamacije);

    echo $reklamacija_json;
}


?>