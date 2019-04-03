<!-- Register Modal -->
<div class="modal fade" id="RegiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registracija</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="container">
              <div class="row">
                <div class="col-lg-12">

                <form action="src/includes/registruj_korisnika.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group row">
                            <h5 class="col-sm-2 col-form-label">Ime</h5>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ime_k" placeholder="Ime">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 class="col-sm-2 col-form-label">Prezime</h5>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="prezime_k" placeholder="Prezime">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 class="col-sm-2 col-form-label">Slika</h5>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" name="slika_k" id="slika_k">
                            </div>
                        </div>

                        <div class="form-group row" id="kat">
                            <h5 class="col-sm-4 col-form-label">Datum rodjenja</h5>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="datum_rodj_k" placeholder="Datum rodjenja">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 class="col-sm-4 col-form-label">Korisničko ime</h5>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="korisnicko_k" placeholder="Korisničko ime">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 class="col-sm-2 col-form-label">Email</h5>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="adresa_k" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h5 class="col-sm-2 col-form-label">Šifra</h5>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="sifra_k" placeholder="Šifra">
                            </div>
                        </div>

                        <div class="form-group row" id="kat">
                            <h5 class="col-sm-2 col-form-label">Pol</h5>
                            <div class="col-sm-10">
                                <select class="form-control"  name="pol_k">
                                    <option value="Muško">Muško</option>
                                    <option value="Žensko">Žensko</option>
                                </select>
                            </div>
                        </div>

           
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"  name="submit">Potvrdi</button>
                        </div>
                        

                      </form>
  
                </div>
              </div>
         </div>
      </div>
  
    </div>
  </div>
</div>

<?php
 if(isset($_POST['submit']) && !empty($_FILES['slika_k'])){

            $slika_file = $_FILES['slika_k']['name'];
            $slika_file_tmp = $_FILES['slika_k']['tmp_name'];
        
         move_uploaded_file($slika_file_tmp, "template/korisnik/images/$slika_file");       

 }
?>