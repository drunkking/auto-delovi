<?php require_once("../class/Narudzbenica.php"); ?>
<?php require_once("../class/Proizvod.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");


if(!empty($_POST['sifra'])){


$narudzbenica = new Narudzbenica();
$proizvod = new Proizvod();

$stavke_narudz = $narudzbenica->stavke($_POST['sifra']);

$spec_arr = [];

for($i = 0; $i  < count($stavke_narudz); $i++){

        $sifra_p = intval($stavke_narudz[$i]['sifra_proizvoda']);
        $tmp_proizvod = $proizvod->return_proizvod_id($sifra_p);

        $stavke_narudz[$i]['naziv_proizvoda'] = $tmp_proizvod['naziv'];
        $stavke_narudz[$i]['slika'] = $tmp_proizvod['slika'];
        $stavke_narudz[$i]['cena'] = $tmp_proizvod['cena'];

}


$stavke_narudz_json = json_encode($stavke_narudz);

echo $stavke_narudz_json;

}





?>