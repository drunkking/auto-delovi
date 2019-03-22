<?php require_once("../class/Uloga.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

$uloga = new Uloga();

$sve_uloge = $uloga->all_uloga();
$uloga_json = json_encode($sve_uloge);

echo $uloga_json;

?>