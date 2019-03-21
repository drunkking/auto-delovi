<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="table_korisnik()">


<!-- Navbar-->
<?php require_once("../includes/data/navbar.php"); ?>

  <div  class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div  id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="pt-4 text-center">Svi korisnici</h1>

                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>Šifra</th>
                          <th>Ime</th>
                          <th>Prezime</th>
                          <th>Slika</th>
                          <th>Datum rodjenja</th>
                          <th>Korisničko ime</th>
                          <th>Email</th>
                          <th>Šifra</th>
                          <th>Pol</th>
                        </tr>
                      </thead>
                      <tbody id="tb_k">
                      
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

   <script src="js/load_korisnik.js"></script>
  <?php require_once("../includes/data/footer.php"); ?>
