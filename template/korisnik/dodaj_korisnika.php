<?php require_once("../includes/data/header_nav.php"); ?>

<body>


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
                    <h1 class=" pt-4 text-center">Dodaj korisnika</h1>

                    <form method="POST" enctype="multipart/form-data" >

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="ime_k" placeholder="Ime">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="prezime_k" placeholder="Prezime">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="file" class="form-control-file" name="slika_k" id="slika_k">
                        </div>

                        <div class="form-group" id="kat">
                            <h5>Datum rodjenja</h5>
                            <input type="date" class="form-control" id="datum_rodj_k" placeholder="Datum rodjenja">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="text" class="form-control" id="korisnicko_k" placeholder="Korisničko ime">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="email" class="form-control" id="adresa_k" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="password" class="form-control" id="sifra_k" placeholder="Šifra">
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
                            <select class="form-control"  id="pol_k">
                                <option value="admin">Admin</option>
                                <option value="korisnik">Korisnik</option>
                            </select>
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

  <?php require_once("../includes/data/footer.php"); ?>


<!-- file upload -->
  <?php
  
   if(isset($_POST['submit'])){

    $slika_file = $_FILES['slika_k']['name'];
    $slika_file_tmp = $_FILES['slika_k']['tmp_name'];

    move_uploaded_file($slika_file_tmp, "images/$slika_file");
   }  
  ?>