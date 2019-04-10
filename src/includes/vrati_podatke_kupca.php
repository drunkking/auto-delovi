<?php require_once("../class/Korisnik.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST['sifra'])){

    $korisnik = new Korisnik();

    $podaci_kupca = $korisnik->return_korisnik_id($_POST['sifra']);
    $podaci_kupca_json = json_encode($podaci_kupca);

    echo $podaci_kupca_json;

}

?>