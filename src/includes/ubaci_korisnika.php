<?php require_once("../class/Korisnik.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korsink = new Korisnik();

    $korsink->set_korisnik(
        $obj_korisnik->ime,
        $obj_korisnik->prezime,
        $obj_korisnik->slika,
        $obj_korisnik->datum_rodjenja,
        $obj_korisnik->korisnicko_ime,
        $obj_korisnik->email,
        $obj_korisnik->sifra,
        $obj_korisnik->pol
    );

    $korsink->insert_korisnik();

    echo json_encode($obj_korisnik);
}



?>