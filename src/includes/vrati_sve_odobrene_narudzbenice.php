<?php require_once("../class/Narudzbenica.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

$narudzbenica = new Narudzbenica();

$sve_narudzbenice = $narudzbenica->odobrena_narudzbenica();
$narudzbenica_json = json_encode($sve_narudzbenice);


echo $narudzbenica_json;


?>