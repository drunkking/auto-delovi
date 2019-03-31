<?php require_once("template/includes/data/prodavnica/index_header.php"); ?>

<body onload="lo_proizvod();li_kategorija();">

  <!-- Navigation -->
      <?php require_once("template/includes/data/prodavnica/index_navbar.php");  ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">

    <div class="col-lg-2 text-center" >

        <h1 class="my-4">Asortiman</h1>

      <div id="kategorija" class="list-group my-4" >

      </div>

      </div>


      <!-- /.col-lg-3 end-->

      <div class="col-lg-8">


          <!-- slidebar -->
    <?php require_once("template/includes/data/prodavnica/index_slide.php"); ?>
     

        <div class="row" id="data">

         <!-- data -->
         


       

        </div>
        <!-- /.row -->

          </div>
        <!-- end col-6-->

        <div class="col-lg-2">


        <div class="list-group my-4">

        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script src="template/prodavnica/js/load_kategorija.js"></script>
  <script src="template/prodavnica/js/load_proizvod.js"></script>
  <script src="template/prodavnica/js/app.js"></script>
  <script src="template/prodavnica/js/naruci_proizvode.js"></script>
  <script src="js/login_korisnik.js"></script>
  
  <!-- Footer -->
  <?php require_once("template/includes/data/prodavnica/index_footer.php"); ?>

