<?php require_once("../class/Kategorija.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["kategorija"])){

    $obj_kategorija = json_decode($_POST["kategorija"], false);

    $kategorija = new Kategorija();
    $kategorija->delete_kategorija_id($obj_kategorija->sifra);

    $sve_kategorije = $kategorija->all_kategorija();
    $kategorija_json = json_encode($sve_kategorije);

    echo $kategorija_json;
}


?>