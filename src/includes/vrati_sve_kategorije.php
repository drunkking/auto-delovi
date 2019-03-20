<?php require_once("../class/Kategorija.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

$kategorija = new Kategorija();

$sve_kategorije = $kategorija->all_kategorija();
$kategorija_json = json_encode($sve_kategorije);

echo $kategorija_json;
?>