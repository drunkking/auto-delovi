<?php require_once("../class/Korisnik.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korisnik = new Korisnik();
    $korisnik->set_korisnik(
        $obj_korisnik->ime,
        $obj_korisnik->prezime,
        $obj_korisnik->slika,
        $obj_korisnik->datum_rodjenja,
        $obj_korisnik->korisnicko_ime,
        $obj_korisnik->email,
        $obj_korisnik->sifra,
        $obj_korisnik->pol
    );
    $korisnik->update_korisnik_id($obj_korisnik->sifra_k);

    $arr = array(
        "status"=>"ok"
    );

    echo json_encode($arr);
    
}

?>