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
  <body onload="lo_profit();br_odobrenih();br_na_cekanju();br_reklam();">


    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  id="menu-toggle"  href="#">Auto delovi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="admin.php">Glavna <i class="fas fa-tachometer-alt"></i></a>
            <a class="nav-item nav-link" href="../../index.php">Sajt <i class="fas fa-home"></i></a>
            <a class="nav-item nav-link" href="#"><?php if(isset($_SESSION['spec'])) echo $_SESSION['spec']; else echo "Username"; ?> <i class="fas fa-user-circle"></i></a>
            <a class="nav-item nav-link" href="../../src/includes/odjavi_korisnika.php">Odjavi se <i class="fas fa-sign-out-alt"></i></a>
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
            <a class="dropdown-item" href="../narudzbenica/odobrene_narudzbenice.php">Odobrene narudzbenice</a>
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

        <!-- Reklamacije-->
        <div class="dropdown">
        
        <a class="list-group-item list-group-item-action bg-light"  id="dropdownMenu"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bug"></i> Reklamacije
        </a>
        
            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                <a class="dropdown-item" href="../reklamacija/sve_reklamacije.php">Sve reklamacije</a>
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
        <div class="row pt-4">
                
                


                <div class="col-lg-3 col-md-6 ">

                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center"><h4>Profit</h4></div>
                        <div class="card-body">
                          <h5 class="card-title">RSD</h5>
                          <h1 class="card-text" id="profit">NOVAC</h1>
                        </div>
                      </div>

                </div>



                <div class="col-lg-3 col-md-6 ">

                       <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center"><h4>Odobrene</h4></div>
                        <div class="card-body">
                          
                          <h5 class="card-title">Broj:</h5>
                          <h1 class="card-text" id="odobrene">br</h1>
                          
                        </div>
                      </div>

                </div>


                <div class="col-lg-3 col-md-6 ">

                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center"><h4>Na čekanju</h4></div>
                    <div class="card-body">
                      <h5 class="card-title">Broj:</h5>
                      <h1 class="card-text" id="cekaju">br</h1>
                    </div>
                  </div>

                </div>


                <div class="col-lg-3 col-md-6 ">

                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header text-center"><h4>Reklamacije</h4></div>
                  <div class="card-body">
                    <h5 class="card-title">Broj:</h5>
                    <h1 class="card-text" id="reklam">0</h1>
                  </div>
                </div>


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

    <script src="js/broj_odobrenih.js"></script>
    <script src="js/broj_na_cekanju.js"></script>
    <script src="js/broj_reklamacija.js"></script>
    <script src="js/load_profit.js"></script>


    <!-- open menu  on resize-->
      <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
     </script>
  </body>
</html>