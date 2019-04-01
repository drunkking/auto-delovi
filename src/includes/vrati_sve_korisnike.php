<?php require_once("../class/Korisnik.php"); ?>
<?php require_once("../class/Uloga.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

$korisnik = new Korisnik();
$uloga = new Uloga();

$svi_korisnici = $korisnik->all_korisnik();

for($i = 0; $i < count($svi_korisnici); $i++){

    $sifra_u = intval($svi_korisnici[$i]['sifra_uloge']);

    $naziv_uloge = $uloga->return_uloga_id($sifra_u);
    $svi_korisnici[$i]['naziv_uloge'] = $naziv_uloge['naziv'];

    $svi_korisnici[$i]['sifra'] = substr($svi_korisnici[$i]['sifra'], 0, 10);
}



$korisnik_json = json_encode($svi_korisnici);


echo $korisnik_json;

?>