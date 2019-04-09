<div class="row justify-content-center reklamacija">
              <div class="col-lg-7 my-4">
                <h2 class="text-center">REKLAMACIJA</h2>
                     <form action="../../src/includes/ubaci_reklamaciju.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="pom">Vaš Email</label>
                            <input type="email" class="form-control" required="required" name="adresa_r">
                          </div>

                          <div class="form-group">
                            <label class="pom" id="poruka_r">Poruka</label>
                               <textarea class="form-control"  required="required" rows="3" name="poruka_r"></textarea>
                          </div>

                          <div class="form-group">
                            <button type="submit" name="reklam" class="btn btn-primary" >POŠALJI</button>
                          </div>
                     </form>
              </div>
             </div>