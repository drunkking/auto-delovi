<?php require_once("../class/Korisnik.php"); ?>
<?php session_start(); ?>

<?php

$korisnik = new Korisnik();

if(isset($_POST['submit'])){

    if(isset($_POST['kor_ime_l']) && isset($_POST['sifra_l'])){

        $korisnicko_ime =  htmlspecialchars(stripslashes(trim($_POST['kor_ime_l'])));
        $sifra = htmlspecialchars(stripslashes(trim($_POST['sifra_l'])));

        $korisnik->set_korisnik_login($korisnicko_ime, $sifra);


        $korisnik->login();
    }
}

?>