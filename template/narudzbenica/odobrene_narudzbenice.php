<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="lo_odobrena_narudzbenica();">


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
                    <h1 class="pt-4 text-center">Odobrene narudzbenice</h1>

                    <table class="table table-hover text-center">
                      <thead>
                        <tr>
                          <th>Šifra</th>
                          <th>Datum naručivanja</th>
                          <th>Stavka narudzbenice</th>
                          <th>Obriši</th>
                        </tr>
                      </thead>
                      <tbody id="tb_n">
                      
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->
  <script src="js/load_odobrene.js"></script>
  <script src="js/load_stavka_narudzbenice.js"></script>

  <!-- Stavka  Modal -->
<div class="modal fade" id="StavkaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stavka</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="container">
              <div class="row">
                <div class="col-lg-12">

                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th>Naziv</th>
                        <th>Slika</th>
                        <th>Cena</th>
                        <th>Kolicina</th>
                      </tr>
                    </thead>
                    <tbody id="stavka">

                    </tbody>

                </table>


                </div>
              </div>
         </div>
         
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>



  <?php require_once("../includes/data/footer.php"); ?>
