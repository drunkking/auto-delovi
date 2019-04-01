<?php require_once("../includes/data/header_nav.php"); ?>

<body>


<!-- Navbar-->
<?php require_once("../includes/data/navbar.php"); ?>


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
  <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid pt-4">
        <div class="row justify-content-center">

                <div class="col-lg-5 forma">
                    <h1 class=" pt-4 text-center">Dodaj ulogu</h1>

                    <form method="POST" enctype="multipart/form-data" >
                        
                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="naziv_u" placeholder="Naziv">
                        </div>
               

                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary" onclick="submit_uloga();">Dodaj</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

  <script src="js/sub_uloga.js"></script>

  <?php require_once("../includes/data/footer.php"); ?>