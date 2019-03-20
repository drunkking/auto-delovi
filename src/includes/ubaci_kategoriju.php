<?php require_once("../class/Kategorija.php"); ?>


<?php

header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["kategorija"])){

    $obj_kategorija = json_decode($_POST["kategorija"], false);

    $kategorija = new Kategorija();
    $kategorija->set_kategorija(
        $obj_kategorija->naziv
    );
    $kategorija->insert_kategorija();

    echo json_encode($obj_kategorija);
}


?>