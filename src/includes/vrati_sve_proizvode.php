<?php require_once("../class/Proizvod.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

$proizvod = new Proizvod();

$svi_proizvodi = $proizvod->all_proizvod();
$proizvod_json = json_encode($svi_proizvodi);

echo $proizvod_json;
?>