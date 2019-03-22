<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="load_p(<?php echo $_GET['data']; ?>)">


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
                    <h1 class=" pt-4 text-center">Izmeni proizvod</h1>

                    <form method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <h5>Naziv</h5>
                            <input type="text" class="form-control" id="naziv_p">
                        </div>

                        <div class="form-group">
                            <h5>Proizvođač</h5>
                            <input type="text" class="form-control" id="proizvodjac_p">
                        </div>


                        <div class="from-group">
                            <h5>Za vozila</h5>
                            <input type="text" class="form-control" id="za_vozila_p">
                        </div>

                        <div class="from-group">
                            <h5>Slika</h5>
                            <img id="tmp_slika" height="200px" widht="300px" src=""></img>
                            <input type="file" class="form-control-file" name="slika_p" id="slika_p">
                        </div>
                    

                        <div class="form-group">
                            <h5>Cena</h5>
                            <input type="number" class="form-control" id="cena_p" min="0">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" onclick="up_proizvod(<?php echo $_GET['data']; ?>);">Izmeni</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

      <script src="js/load_proizvod_id.js"></script>
      <script src="js/update_proizvod.js"></script>

  <?php require_once("../includes/data/footer.php"); ?>


<!-- file upload -->
  <?php
  
   if(isset($_POST['submit'])){

    $slika_file = $_FILES['slika_p']['name'];
    $slika_file_tmp = $_FILES['slika_p']['tmp_name'];

    move_uploaded_file($slika_file_tmp, "images/$slika_file");
   }  
  ?>
