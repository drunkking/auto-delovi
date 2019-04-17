<?php require_once("../class/Proizvod.php"); ?>
<?php require_once("../class/Kategorija.php"); ?>

<?php

header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["proizvod"])){

    $obj_proizvod = json_decode($_POST["proizvod"], false);

    $proizvod = new Proizvod();
    $kategorija = new Kategorija();
    $proizvod->delete_proizvod_id($obj_proizvod->sifra);

    $svi_proizvodi = $proizvod->all_proizvod();


    for($i = 0; $i < count($svi_proizvodi); $i++){
        $sifra_k = intval( $svi_proizvodi[$i]['sifra_kategorije']);
    
        $naziv_kategorije = $kategorija->return_kategorija_id($sifra_k);
        $svi_proizvodi[$i]['naziv_kategorije'] = $naziv_kategorije['naziv'];
    
    }



    $proizvod_json = json_encode($svi_proizvodi);

    echo $proizvod_json;
}


?>