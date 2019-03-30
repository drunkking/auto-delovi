<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Korpa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="container">
              <div class="row">
                <div class="col-lg-6">

                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th>Slika</th>
                        <th>Naziv</th>
                        <th>Cena</th>
                        <th>Kolicina</th>
                      </tr>
                    </thead>
                    <tbody id="korpa">

                    </tbody>

                </table>


                </div>
              </div>
         </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="brisi" onclick="ocistiKorpu();" data-dismiss="modal">Obustavi</button>
        <button type="button" class="btn btn-primary" onclick="naruci();ocistiKorpu()">Naruci</button>
      </div>
    </div>
  </div>
</div>