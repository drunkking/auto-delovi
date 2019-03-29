<?php require_once("../class/Narudzbenica.php"); ?>

<?php
header("Content-Type: application/json; charset=UTF-8");

if(!empty($_POST["proizvod"])){

    $kolica = json_decode($_POST["proizvod"], false);
    
    /** SKIDANJE ZAGRADA */
    $kol = str_replace('[','', $kolica);
    $kol = str_replace(']','', $kol);
    $kol1 = str_replace('{','', $kol);
    $kol2 = str_replace('}','', $kol1);
    $kol2 = str_replace('""','', $kol2);


    $arr = explode(',',$kol2);
    $niz = array();

    $br = 0;
    $dimenzija = 0;

    /**PAKOVANJE NIZA  */
    for($i = 0; $i < count($arr); $i++){

       if($br > 4){
           $br = 0;
           $dimenzija++;
       }

        if($br == 0){
            $niz[$dimenzija]['slika'] = $arr[$i];
            $niz[$dimenzija]['slika'] = str_replace('"slika":','',$niz[$dimenzija]['slika']);
        }
        if($br == 1){
            $niz[$dimenzija]['naziv'] = $arr[$i];
            $niz[$dimenzija]['naziv'] = str_replace('"naziv":','',$niz[$dimenzija]['naziv']);
        }
        if($br == 2){
            $niz[$dimenzija]['cena'] = $arr[$i];
            $niz[$dimenzija]['cena'] = str_replace('"cena":','',$niz[$dimenzija]['cena']);
        }
        if($br == 3){
            $niz[$dimenzija]['sifra'] = $arr[$i];
            $niz[$dimenzija]['sifra'] = str_replace('"sifra":','',$niz[$dimenzija]['sifra']);
            $niz[$dimenzija]['sifra'] = str_replace('"','',$niz[$dimenzija]['sifra']);
        }
        if($br == 4){
            $niz[$dimenzija]['kolicina'] = $arr[$i];
            $niz[$dimenzija]['kolicina'] = str_replace('"kolicina":','',$niz[$dimenzija]['kolicina']);
            $niz[$dimenzija]['kolicina'] = str_replace('"','',$niz[$dimenzija]['kolicina']);
        }

      $br++;
                   
    }



    
  


    $narudz = new Narudzbenica();

    $narudz->set_narudzbenica("2019",1, 223);
    $narudz->insert_narudzbenica();

    for($i = 0; $i < count($niz); ++$i){

        $stavka = new StavkaNarudzbenice();
        $stavka->set_stavka_narudzbenice($narudz->sifra_narudzbenice,intval( $niz[$i]['sifra']), intval($niz[$i]['kolicina']));
        $narudz->push_stavka($stavka);
    }

    $narudz->insert_stavka_all();
    
    
    



    



}




?>