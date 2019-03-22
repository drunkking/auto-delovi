<?php  require_once("../class/Korisnik.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korisnik = new Korisnik();
    $korisnik->delete_korisnik_id($obj_korisnik->sifra);

    $svi_korisnici = $korisnik->all_korisnik();
    $korisnik_json = json_encode($svi_korisnici);

    echo $korisnik_json;
}


?>