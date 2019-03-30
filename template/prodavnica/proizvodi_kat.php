<?php require_once("index_header.php"); ?>

<body onload="li_kategorija();lo_proizvod(<?php echo $_GET['data']; ?>);">

  <!-- Navigation -->
      <?php require_once("index_navbar.php"); ?>

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
       <?php require_once("index_slide.php"); ?>


        <div class="row" id="data">

         <!-- data -->
       

        </div>
        <!-- /.row -->

          </div>
        <!-- end col-6-->

        <div class="col-lg-2">


        <div class="list-group my-4">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script src="js/load_kategorija_id.js"></script>
  <script src="js/load_proizvod_id.js"></script>
  <script src="js/app.js"></script>
  <script src="js/naruci_proizvode.js"></script>
  <script src="js/login_korisnik.js"></script>
  <!-- Footer -->
  <?php require_once("index_footer.php"); ?>
