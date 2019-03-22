<?php  require_once("../class/Proizvod.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["proizvod"])){

    $obj_prozivod = json_decode($_POST["proizvod"], false);

    $proizvod = new Proizvod();
    $return_obj =  $proizvod->return_proizvod_id($obj_prozivod->sifra);


    echo json_encode($return_obj);
}



?>