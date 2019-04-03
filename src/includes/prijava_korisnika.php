<?php require_once("../class/Korisnik.php"); ?>
<?php session_start(); ?>

<?php

$korisnik = new Korisnik();

if(isset($_POST['submit'])){

    if(!empty($_POST['kor_ime_l']) && !empty($_POST['sifra_l'])){

        $korisnik->set_korisnik_login(
            htmlspecialchars(stripslashes(trim($_POST['kor_ime_l']))), 
            htmlspecialchars(stripslashes(trim($_POST['sifra_l']))));

        $korisnik->login();
    } else {
        header("Location: ../../index.php");
    }

     
    
} else {
    header("Location: ../../index.php");
}

?>