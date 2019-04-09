<?php require_once("../class/Reklamacija.php"); ?>


<?php

$reklamacija = new Reklamacija();

if(isset($_POST['reklam'])){

    
    if(!empty($_POST['adresa_r']) && !empty($_POST['poruka_r'])){


        $reklamacija->set_reklamacija(
            htmlspecialchars(stripslashes(trim($_POST['adresa_r']))),
            htmlspecialchars(stripslashes(trim($_POST['poruka_r']))));

        $reklamacija->insert_reklamacija();

        header("Location: ../../index.php");

    } else {
        header("Location: ../../index.php");
    }

} else {
    header("Location: ../../index.php");
}





?>