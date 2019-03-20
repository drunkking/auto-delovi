<?php require_once("../includes/data/header_nav.php"); ?>

  <div class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div onload="table_proizvod()" id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="pt-4 text-center">Svi proizvodi</h1>

                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>Šifra</th>
                          <th>Naziv</th>
                          <th>Proizvođač</th>
                          <th>Za vozila</th>
                          <th>Slika</th>
                          <th>Cena</th>
                          <th>Kategorija</th>
                        </tr>
                      </thead>
                      <tbody id="tb_p">
                      
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

   <script src="js/load_proizvod.js"></script>
  <?php require_once("../includes/data/footer.php"); ?>
