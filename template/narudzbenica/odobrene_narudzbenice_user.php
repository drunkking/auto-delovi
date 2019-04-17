<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="lo_odobrena_narudzbenica_user();">


<!-- Navbar-->
<?php 
    if(isset($_SESSION['admin']) && isset($_SESSION['spec'])){
      $spec = $_SESSION['spec'];

      if($_SESSION['admin'] == $spec){
        require_once("../includes/data/navbar.php"); 
      }
    } else if(isset($_SESSION['user'])){
      $spec = $_SESSION['spec'];
      
      if($_SESSION['user'] == $spec){
        require_once("../includes/data/navbar_user.php"); 
      }
    }
?>

  <div  class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <?php 
          if(isset($_SESSION['admin']) && isset($_SESSION['spec'])){
            $spec = $_SESSION['spec'];

            if($_SESSION['admin'] == $spec){
            require_once("../includes/data/sidebar.php");
            }
          } else if(isset($_SESSION['user'])){
            $spec = $_SESSION['spec'];
            
            if($_SESSION['user'] == $spec){
            require_once("../includes/data/sidebar_user.php");
            }
          }
    
    ?>

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
  <script src="js/load_odobrene_user.js"></script>
  <script src="js/load_stavka_narudzbenice.js"></script>
  <script src="js/delete_narudzbenica.js"></script>

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
                        <th>Količina</th>
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
