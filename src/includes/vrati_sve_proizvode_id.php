<?php require_once("../class/Proizvod.php"); ?>
<?php require_once("../class/Kategorija.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST["proizvod"])){

    $obj_proizvod = json_decode($_POST["proizvod"], false);

    $proizvod = new Proizvod();
    $svi_proizvodi = $proizvod->all_proizvod_kategorija($obj_proizvod->sifra);

    $proizvod_json = json_encode($svi_proizvodi);


    echo $proizvod_json;

}

?>