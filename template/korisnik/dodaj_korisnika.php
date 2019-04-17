<?php require_once("../includes/data/header_nav.php"); ?>

<body onload="lo_uloge();">


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
                    <h1 class=" pt-4 text-center">Dodaj korisnika</h1>

                    <form method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="ime_k" placeholder="Ime"  required>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="prezime_k" placeholder="Prezime"  required>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="file" class="form-control-file" name="slika_k" id="slika_k"  required>
                        </div>

                        <div class="form-group" id="kat">
                            <h5>Datum rodjenja</h5>
                            <input type="date" class="form-control" id="datum_rodj_k" placeholder="Datum rodjenja"  required>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="korisnicko_k" placeholder="Korisničko ime"  required>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="email" class="form-control" id="adresa_k" placeholder="Email"  required>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="password" class="form-control" id="sifra_k" placeholder="Šifra"  required> 
                        </div>

                        <div class="form-group" id="kat">
                            <h5>Pol</h5>
                            <select class="form-control"  id="pol_k">
                                <option value="Muško">Muško</option>
                                <option value="Žensko">Žensko</option>
                            </select>
                        </div>

                        <div class="form-group" id="kat">
                            <h5>Uloga</h5>
                            <select class="form-control"  id="uloga_k"></select>
                        </div>  

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" onclick="submit_korisnik();">Dodaj</button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
        
        </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

      <script src="js/sub_korisnik.js"></script>
      <script src="js/load_uloge.js"></script>

  <?php require_once("../includes/data/footer.php"); ?>


<!-- file upload -->
  <?php
  
   if(isset($_POST['submit']) && !empty($_FILES['slika_p'])){

    $slika_file = $_FILES['slika_k']['name'];
    $slika_file_tmp = $_FILES['slika_k']['tmp_name'];

    move_uploaded_file($slika_file_tmp, "images/$slika_file");
   }  
  ?>