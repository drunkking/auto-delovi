<?php require_once("template/includes/data/prodavnica/index_header.php"); ?>

<body onload="li_kategorija();se_kat();">

  <!-- Navigation -->
      <?php require_once("template/includes/data/prodavnica/index_navbar.php");  ?>

  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row data page">

    <div class="col-lg-2 text-center">
   
        <div id="kategorija" class="list-group my-4" >
      

        </div>

      </div>


      <!-- /.col-lg-3 end-->

      <div class="col-lg-8 main">
      <?php require_once("template/prodavnica/search_bar.php"); ?>


      <?php require_once("template/includes/data/prodavnica/index_slide.php"); ?>

          <!-- slidebar -->
   
          <div class="container-fluid"  id="data">

        
          <div class="row my-4 text-center">
                <!-- data -->
                  <div class="col-lg-4 col-md-4 kartica">
                    <div class="card" >
                      <img src="img/audi.jpg" class="card-img-top " alt="...">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>  

                  <div class="col-lg-4 col-md-4 kartica">
                    <div class="card" >
                      <img src="img/benz.png" class="card-img-top " alt="...">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    </div>  

                    <div class="col-lg-4 col-md-4 kartica">
                        <div class="card">
                          <img src="img/skoda.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                    </div>  

             </div>

             <div class="row my-4  text-center">
                <!-- data -->
                <div class="col-lg-4 col-md-4 kartica">
                    <div class="card">
                      <img src="img/leksus.png" class="card-img-top " alt="...">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>  

                  <div class="col-lg-4 col-md-4 kartica">
                    <div class="card">
                      <img src="img/lada.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    </div>  

                    <div class="col-lg-4 col-md-4 kartica">
                        <div class="card">
                          <img src="img/opel.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                    </div>  
             </div>

              
             

        </div>
        <!-- /.row -->

        </div>
        <!-- end col-6-->

        <div class="col-lg-2 " >


        <div class="list-group my-4">

        </div>


      </div>

    </div>
    <!-- /.row -->



  </div>
  <!-- /.container -->


  <script src="template/prodavnica/js/load_kategorija.js"></script>
  <script src="template/prodavnica/js/load_kategorija_s.js"></script>
  <script src="template/prodavnica/js/search_proizvodi.js"></script>
  <script src="template/prodavnica/js/app.js"></script>
  <script src="template/prodavnica/js/naruci_proizvode.js"></script>

  
  
  <!-- Footer -->
  <?php require_once("template/includes/data/prodavnica/index_footer.php"); ?>

