<?php require_once("../class/Narudzbenica.php"); ?>
<?php require_once("../class/Proizvod.php"); ?>

<?php


header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST['sif_narudz'])){

    $obj_prozivod = json_decode($_POST["sif_narudz"], false);

    $proizvod = new Proizvod();
    $narudzbenica = new Narudzbenica();
    $narudzbenica->odobri_narudzbenicu($obj_prozivod->sifra);

    //skini proizvode sa stanja
    $stavke_narudz = $narudzbenica->stavke($obj_prozivod->sifra);

    for($i = 0; $i < count($stavke_narudz); $i++){

        $proizvod->odobri_proizvod($stavke_narudz[$i]['sifra_proizvoda'], $stavke_narudz[$i]['kolicina']);
    }

}

?>