<!-- login Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prijava</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="container">
              <div class="row">
                <div class="col-lg-12">
                    <form action="../../src/includes/prijava_korisnika.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" name="kor_ime_l" placeholder="Korisničko ime">
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" name="sifra_l" placeholder="Šifra">
                      </div>

                      <div class="form-group">
                      
                          <button type="submit" name="submit" class="btn btn-primary" >Prijavi se</button>
                       
                      </div>
                    
                    </form>
                </div>
              </div>
         </div>
      </div>

    </div>
  </div>
</div>


