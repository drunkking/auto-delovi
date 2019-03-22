<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="table_uloga()">


<!-- Navbar-->
<?php require_once("../includes/data/navbar.php"); ?>


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
  <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="col-lg-6">
                    <h1 class=" pt-4 text-center">Sve uloge</h1>

                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>Šifra</th>
                                <th>Naziv</th>
                                <th>Obriši</th>
                            </tr>
                        </thead>
                        <tbody id="tb_u">

                        </tbody>
                    </table>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

  <script src="js/load_uloga.js"></script>
  <script src="js/delete_uloga.js"></script>

  <?php require_once("../includes/data/footer.php"); ?>