<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="table_kategorija()">


<!-- Navbar-->
<?php require_once("../includes/data/navbar.php"); ?>

  <div  class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div  id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="pt-4 text-center">Sve kategorije</h1>

                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>Šifra</th>
                          <th>Naziv</th>
                          <th>Izmeni</th>
                          <th>Obriši</th>
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

   <script src="js/load_kategorija.js"></script>
  <?php require_once("../includes/data/footer.php"); ?>
