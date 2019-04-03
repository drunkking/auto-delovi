<?php require_once("../class/Korisnik.php"); ?>

<?php

$korisnik = new Korisnik();

if(isset($_POST['submit'])){

    if(!empty($_POST['ime_k']) && !empty($_POST['prezime_k']) &&
    !empty($_POST['datum_rodj_k'])  && !empty($_FILES['slika_k']) &&
    !empty($_POST['korisnicko_k']) && !empty($_POST['adresa_k']) &&
    !empty($_POST['sifra_k']) && !empty($_POST['pol_k'])) {

        $file_name = $_FILES['slika_k']['name'];

        //move picture to dir
        $slika_file = $_FILES['slika_k']['name'];
        $slika_file_tmp = $_FILES['slika_k']['tmp_name'];
         move_uploaded_file($slika_file_tmp, "../../template/korisnik/images/$slika_file");       


            $korisnik->set_korisnik(
                htmlspecialchars(stripslashes(trim($_POST['ime_k']))),
                htmlspecialchars(stripslashes(trim($_POST['prezime_k']))),
                htmlspecialchars(stripslashes(trim($file_name))),
                htmlspecialchars(stripslashes(trim($_POST['datum_rodj_k']))),
                htmlspecialchars(stripslashes(trim($_POST['korisnicko_k']))),
                htmlspecialchars(stripslashes(trim($_POST['adresa_k']))),
                htmlspecialchars(stripslashes(trim($_POST['sifra_k']))),
                htmlspecialchars(stripslashes(trim($_POST['pol_k']))),
                2);

            $korisnik->register_korisnik();
        }
        else{
            header("Location: ../../index.php");
        }

}  else {
    header("Location: ../../index.php");
}

?>