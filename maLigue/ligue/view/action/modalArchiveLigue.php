<!-- Modal -->
<div class="modal fade" id="modalArchiveLigue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ArchiveLigue">Archiver cette ligue ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <h6>Archivage</h6>
                <div class="input-group">
                  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">Ligue 1</option>
                    <option value="2">Ligue 2</option>
                    <option value="3">Ligue 3</option>
                  </select>
                  <button class="btn btn-outline-primary" type="button">Archiver</button>
                </div>
              </div>
              <hr class="dropdown-divider"/>
              <div class="col-md-6">
                <h6>Suppression de ligue</h6>
                <div class="input-group">
                  <select class="form-select" id="SupLigue" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">Ligue 1</option>
                    <option value="2">Ligue 2</option>
                    <option value="3">Ligue 3</option>
                  </select>
                  <button class="btn btn-outline-primary" type="button">Supprimer</button>
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