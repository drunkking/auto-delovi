<?php require_once("../class/Reklamacija.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

$reklamacija = new Reklamacija();

$sve_reklamacije = $reklamacija->all_reklamacija();
$reklamacija_json = json_encode($sve_reklamacije);


echo $reklamacija_json;


?>