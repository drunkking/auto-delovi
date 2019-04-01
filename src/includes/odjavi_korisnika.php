<?php session_start(); ?>

<?php




if(isset($_SESSION['admin']) && isset($_SESSION['spec'])){

    unset($_SESSION['admin']);
    unset($_SESSION['spec']);
    session_destroy();

} else if(isset($_SESSION['user']) && isset($_SESSION['spec'])){

    unset($_SESSION['user']);
    unset($_SESSION['spec']);
    session_destroy();
}



header("Location: ../../index.php");

?>