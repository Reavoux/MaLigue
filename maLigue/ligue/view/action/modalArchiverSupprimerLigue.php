<!-- Modal -->
<div class="modal fade" id="modalArchiverSupprimerLigue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archiver ou supprimer cette ligue ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <h6>Archivage</h6>
                <div class="input-group mb-3">
                  <select class="form-select" id="Archivage" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">Ligue 1</option>
                    <option value="2">Ligue 2</option>
                    <option value="3">Ligue 3</option>
                  </select>
                  <button class="btn btn-outline-primary" type="button"><i class="fas fa-check"></i></button>
                </div>
              </div>
              <hr class="dropdown-divider"/>
              <div class="col-md-6">
                <h6>Suppression de ligue</h6>
                <div class="input-group mb-3">
                  <select class="form-select" id="SupLigue" aria-label="SupLigue">
                    <option selected>Choose...</option>
                    <option value="1">Ligue 1</option>
                    <option value="2">Ligue 2</option>
                    <option value="3">Ligue 3</option>
                  </select>
                  <button class="btn btn-outline-danger" type="button"><i class="fas fa-times"></i></button>
                </div>    
              </div> 
            </div>      
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>