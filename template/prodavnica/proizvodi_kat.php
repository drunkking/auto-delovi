<?php require_once("index_header.php"); ?>

<body onload="li_kategorija();lo_proizvod(<?php echo $_GET['data']; ?>);se_kat();">

  <!-- Navigation -->
      <?php require_once("index_navbar.php"); ?>

  <!-- Page Content -->
  <div class="container-fluid">

        <div class="row blok1">
            <div class="col-lg-2 text-center" >
              <div id="kategorija"  class="list-group my-4"></div>
            </div>

              <div class="col-lg-8 text-center my-3">
                  <?php require_once("search_bar.php"); ?>
                  <?php require_once("index_slide.php"); ?>
               </div>
              

              <div class="col-lg-2"></div>
        </div>
            <!-- /.row -->

      <div class="row justify-content-center blok2">
        <div class="col-lg-8" >
          <div class="container-fluid"  id="data"></div> 
          </div>
       </div>
    
       <?php require_once("../includes/data/prodavnica/reklamacija_1.php"); ?>

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
