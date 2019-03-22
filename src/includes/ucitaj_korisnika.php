<?php require_once("../class/Korisnik.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korisnik = new Korisnik();
    $return_obj = $korisnik->return_korisnik_id($obj_korisnik->sifra);

    echo json_encode($return_obj);
}


?>