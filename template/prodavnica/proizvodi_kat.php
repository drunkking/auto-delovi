<?php require_once("index_header.php"); ?>

<body onload="li_kategorija();lo_proizvod(<?php echo $_GET['data']; ?>);se_kat();">

  <!-- Navigation -->
      <?php require_once("index_navbar.php"); ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row page">

    <div class="col-lg-2 text-center" >

       

      <div id="kategorija"  class="list-group my-4" >

      </div>

      </div>


      <!-- /.col-lg-3 end-->

      <div  class="col-lg-8 main">

      <?php require_once("search_bar.php"); ?>

       <!-- slidebar -->
       <?php require_once("index_slide.php"); ?>


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

  <script src="js/load_kategorija_id.js"></script>
  <script src="js/load_kategorija_s_id.js"></script>
  <script src="js/search_proizvodi_id.js"></script>
  <script src="js/load_proizvod_id.js"></script>
  <script src="js/app.js"></script>
  <script src="js/naruci_proizvode.js"></script>
  

  <!-- Footer -->
  <?php require_once("index_footer.php"); ?>
