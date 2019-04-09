<?php require_once("template/includes/data/prodavnica/index_header.php"); ?>

<body onload="li_kategorija();se_kat();">

  <!-- Navigation -->
      <?php require_once("template/includes/data/prodavnica/index_navbar.php");  ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row data blok1">

      <div class="col-lg-2 text-center">
        <div id="kategorija" class="list-group my-4"></div>
      </div>

      <!-- /.col-lg-3 end-->

      <div class="col-lg-8 text-center my-3">
      <?php require_once("template/prodavnica/search_bar.php"); ?>      
      <img class="img img-fluid p-3" src="template/prodavnica/images/race.jpg">
        
      </div>
     
       
  
        <div class="col-lg-2"></div>

    </div>
    <!-- /.row -->

    <div class="row justify-content-center blok2">
        <div class="col-lg-8">

            <div class="container-fluid" id="data"></div>

            <div class="col-lg-12 text-center">

            <div class="jumbotron jumbotron-fluid mt-4">
              <div class="container" >
                <h1 class="display-4">Munja trans</h1>
                <p class="lead" style="text-align:left;">
                There are many variations of passages of Lorem Ipsum available, 
                but the majority have suffered alteration in some form, by injected humour, 
                or randomised words which don't look even slightly believable. 
                If you are going to use a passage of Lorem Ipsum, you need to be sure 
                there isn't anything embarrassing hidden in the middle of text. 
        
                </p>
              </div>
            </div>

            </div>
    
        </div>
    </div>



  </div>
  <!-- /.container -->


  <script src="template/prodavnica/js/load_kategorija.js"></script>
  <script src="template/prodavnica/js/load_kategorija_s.js"></script>
  <script src="template/prodavnica/js/search_proizvodi.js"></script>
  <script src="template/prodavnica/js/app.js"></script>
  <script src="template/prodavnica/js/naruci_proizvode.js"></script>

  
  
  <!-- Footer -->
  <?php require_once("template/includes/data/prodavnica/index_footer.php"); ?>

