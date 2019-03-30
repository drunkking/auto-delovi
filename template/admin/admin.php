<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../includes/css/sidebar.css" rel="stylesheet">
    <link href="../includes/css/all.css" rel="stylesheet">

  

    <title>Dashboard</title>
  </head>
  <body>


    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  id="menu-toggle"  href="#">Auto delovi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="admin.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="../../index.php">Sajt</a>
            <a class="nav-item nav-link" href="#"><?php if(isset($_SESSION['spec'])) echo $_SESSION['spec']; else echo "Username"; ?></a>
            <a class="nav-item nav-link" href="../../src/includes/odjavi_korisnika.php">Odjavi se</a>
            </div>
        </div>
    </nav>


  <div class="d-flex" id="wrapper">


  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group">

      
        <!-- Proizvodi-->
        <div class="dropdown">
        <a class="list-group-item list-group-item-action bg-light "  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-dolly-flatbed"></i> Proizvodi
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="../proizvod/svi_proizvodi.php">Svi proizvodi</a>
            <a class="dropdown-item" href="../proizvod/dodaj_proizvod.php">Dodaj proizvod</a>
        </div>
        </div>
        
        
        <!--Kategorije-->
        <div class="dropdown">
        <a class="list-group-item list-group-item-action bg-light "  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-project-diagram"></i> Kategorije
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="../kategorija/sve_kategorije.php">Sve kategorije</a>
            <a class="dropdown-item" href="../kategorija/dodaj_kategoriju.php">Dodaj kategoriju</a>
        </div>
        </div>


                <!--Narudzbenice-->
                <div class="dropdown">
        <a class="list-group-item list-group-item-action bg-light "  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-shipping-fast"></i> Narudzbenice
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="../narudzbenica/sve_narudzbenice.php">Sve narudzbenice</a>
            <a class="dropdown-item" href="../narudzbenica/sve_narudzbenice.php">Dodaj narudzbenicu</a>
        </div>
        </div>
      
        <!-- Korisnici-->
        <div class="dropdown">
        <a class="list-group-item list-group-item-action bg-light "  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users"></i> Korisnici
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="../korisnik/svi_korisnici.php">Svi korisnici</a>
            <a class="dropdown-item" href="../korisnik/dodaj_korisnika.php">Dodaj korisnika</a>
        </div>
        </div>


        <!-- Uloge-->
        <div class="dropdown">
        
        <a class="list-group-item list-group-item-action bg-light"  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-shield"></i> Uloge 
        </a>
        
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <a class="dropdown-item" href="../uloga/sve_uloge.php">Sve uloge</a>
                <a class="dropdown-item" href="../uloga/dodaj_ulogu.php">Dodaj ulogu</a> 
            </div>
        </div>


        <!-- Profil-->
        <div class="dropdown">
        <a class="list-group-item list-group-item-action bg-light" href="#" id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-address-card"></i> Profil
        
        </a>
        
        </div>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="mt-4">Admin strana</h1>
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="../bootstrap/popper.min.js" ></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <!-- open menu  on resize-->
      <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
     </script>
  </body>
</html>