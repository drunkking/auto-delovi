<?php  require_once("../class/Korisnik.php"); ?>
<?php require_once("../class/Uloga.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["korisnik"])){

    $obj_korisnik = json_decode($_POST["korisnik"], false);

    $korisnik = new Korisnik();
    $korisnik->delete_korisnik_id($obj_korisnik->sifra);

    $svi_korisnici = $korisnik->all_korisnik();

    for($i = 0; $i < count($svi_korisnici); $i++){

        $sifra_u = intval($svi_korisnici[$i]['sifra_uloge']);
    
        $naziv_uloge = $uloga->return_uloga_id($sifra_u);
        $svi_korisnici[$i]['naziv_uloge'] = $naziv_uloge['naziv'];
    
        $svi_korisnici[$i]['sifra'] = substr($svi_korisnici[$i]['sifra'], 0, 10);
    }



    $korisnik_json = json_encode($svi_korisnici);
    echo $korisnik_json;
}


?>