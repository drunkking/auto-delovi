<?php require_once("../class/Narudzbenica.php"); ?>
<?php require_once("../class/Korisnik.php"); ?>

<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");

$narudzbenica = new Narudzbenica();
$korisnik = new Korisnik();

$kor_ime = $_SESSION['spec'];
$sifra_korisnika = $korisnik->korisnik_korime($kor_ime);

$sve_narudzbenice = $narudzbenica->odobrena_narudzbenica_user($sifra_korisnika['sifra_korisnika']);
$narudzbenica_json = json_encode($sve_narudzbenice);


echo $narudzbenica_json;


?>