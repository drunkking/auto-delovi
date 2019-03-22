<?php require_once("../class/Uloga.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["uloga"])){

    $obj_uloga = json_decode($_POST["uloga"], false);

    $uloga = new Uloga();

    $uloga->set_uloga(
        $obj_uloga->naziv
    );

    $uloga->insert_uloga();

    echo json_encode($obj_uloga);
}

?>