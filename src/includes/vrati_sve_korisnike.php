<?php require_once("../class/Korisnik.php"); ?>


<?php
header("Content-Type: application/json; charset=UTF-8");

$korisnik = new Korisnik();

$svi_korisnici = $korisnik->all_korisnik();
$korisnik_json = json_encode($svi_korisnici);

echo $korisnik_json;

?>