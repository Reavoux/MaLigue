<!-- Modal -->
<div class="modal fade" id="modalInvitations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Invitation à rejoindre la ligue</h5>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Ajouter un ami" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
              <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-check"></i></button>
            </div>
        </form>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <select class="form-select" aria-label="Default select example">
                <option hidden>Liste d'amis</option>
                <option value="1">Reav</option>
                <option value="2">Darelik</option>
                <option value="3">Elmios</option>
              </select>
            </div>
            <div class="col-md-6">
              <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name="optradio" id="optradio">
                <label class="form-check-label" for="flexRadioDefault1">
                Admin / Joueur
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name="optradio" id="optradio">
                <label class="form-check-label" for="flexRadioDefault1">
                Joueur
                </label>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name="optradio" id="optradio">
                <label class="form-check-label" for="flexRadioDefault1">
                Spectateur
                </label>
              </div>
            </div>  
          </div>         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ajouter</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>