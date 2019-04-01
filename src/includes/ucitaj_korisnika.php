<?php require_once("../class/Korisnik.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korisnik = new Korisnik();
    
    $return_obj = $korisnik->return_korisnik_id($obj_korisnik->sifra);
    $return_obj['sifra'] = substr($return_obj['sifra'], 0, 10);
    

    echo json_encode($return_obj);
}


?>