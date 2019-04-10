<?php require_once("../class/Narudzbenica.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["narudzbenica"])){

    $obj_narudzbenica = json_decode($_POST["narudzbenica"], false);

    $narudzbenica = new Narudzbenica();
    $narudzbenica->delete_narudzbenica_id($obj_narudzbenica->sifra);

    

    $sve_narudzbenice = $narudzbenica->all_narudzbenica();
    $narudzbenica_json = json_encode($sve_narudzbenice);

    echo $narudzbenica_json;
}
?>