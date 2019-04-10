<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="load_k(<?php echo $_GET['data']; ?>);">


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
                    <h1 class=" pt-4 text-center">Izmeni korisnika</h1>

                    <form method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <h5>Ime</h5>
                            <input type="text" class="form-control" id="ime_k" >
                        </div>

                        <div class="form-group">
                            <h5>Prezime</h5>
                            <input type="text" class="form-control" id="prezime_k">
                        </div>

                        <div class="form-group">
                            <h5>Slika</h5>
                            <img class="img-fluid" id="tmp_slika" height="200px" widht="300px" src="" name="">
                            <div class="img-fluid" id="help_slika"></div>
                            <input type="file" class="form-control-file" name="slika_k" id="slika_k">
                        </div>

                        <div class="form-group">
                            <h5>Datum rodjenja</h5>
                            <input type="date" class="form-control" id="datum_rodj_k">
                        </div>

                        <div class="form-group">
                            <h5>Korisničko ime</h5>
                            <input type="text" class="form-control" id="korisnicko_k">
                        </div>

                        <div class="form-group">
                            <h5>Email</h5>
                            <input type="email" class="form-control" id="adresa_k">
                        </div>

                        <div class="form-group">
                            <h5>Šifra</h5>
                            <input type="text" class="form-control" id="sifra_k">
                        </div>

                        <div class="form-group">
                            <h5>Pol</h5>
                            <select class="form-control"  id="pol_k">
                                <option value="Muško">Muško</option>
                                <option value="Žensko">Žensko</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <h5>Uloga</h5>
                            <select class="form-control"  id="uloga_k">

                            </select>
                        </div>  


                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" onclick="up_korisnik(<?php echo $_GET['data']; ?>);">Izmeni</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

      <script src="js/load_korisnik_id.js"></script>
      <script src="js/update_korisnik.js"></script>


  <?php require_once("../includes/data/footer.php"); ?>


<!-- file upload -->
  <?php
     if(isset($_POST['submit']) && !empty($_FILES['slika_k'])){

   

        $slika_file = $_FILES['slika_k']['name'];
        $slika_file_tmp = $_FILES['slika_k']['tmp_name'];
    
        move_uploaded_file($slika_file_tmp, "images/$slika_file");
        
       }  

  ?>