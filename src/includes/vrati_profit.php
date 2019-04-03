<?php require_once("../class/Proizvod.php"); ?>


<?php

header("Content-Type: application/json; charset=UTF-8");

$proizvod = new Proizvod();

$profit = $proizvod->return_profit();


$profit_json = json_encode($profit);


echo $profit_json;

?>