<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="lo_kategorije()">


<!-- Navbar-->
<?php require_once("../includes/data/navbar.php"); ?>


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
  <?php require_once("../includes/data/sidebar.php"); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="col-lg-5">
                    <h1 class=" pt-4 text-center">Dodaj proizvod</h1>

                    <form method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="naziv_p"  placeholder="Naziv">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="proizvodjac_p" placeholder="Proizvođač">
                        </div>


                        <div class="from-group">
                            <br>
                            <textarea type="text" class="form-control" id="za_vozila_p" placeholder="Za vozila"></textarea>
                        </div>

                        <div class="from-group">
                            <br>
                            <input type="file" class="form-control-file" name="slika_p" id="slika_p">
                        </div>

                        <div class="form-group" id="kat">
                            <h5>Kategorija</h5>
                            <select class="form-control" id="kategorija">  
                            </select>
                        </div>
                    

                        <div class="form-group">
                            <br>
                            <input type="number" class="form-control" id="cena_p" min="0" placeholder="Cena">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" onclick="submit_proizvod();">Dodaj</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

      <script src="js/sub_proizvod.js"></script>
      <script src="js/load_kategorije.js"></script>

  <?php require_once("../includes/data/footer.php"); ?>


<!-- file upload -->
  <?php
  
   if(isset($_POST['submit'])){

    $slika_file = $_FILES['slika_p']['name'];
    $slika_file_tmp = $_FILES['slika_p']['tmp_name'];

    move_uploaded_file($slika_file_tmp, "images/$slika_file");
   }  
  ?>
