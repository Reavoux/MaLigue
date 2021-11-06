<!-- Modal -->
<div class="modal fade" id="modalCreationLigue" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">
        <span class="badge bg-primary">1</span>  
        Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <h6>Nom</h6>
          <input type="text" class="form-control" id="NomLigue" placeholder="Nom de la ligue">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">
        <span class="badge bg-primary">2</span>    
        Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select example">
              <option hidden>Type de ligue</option>
              <option value="1">Simple Round</option>
              <option value="2">Double Round</option>
              <option value="3">Toute Round</option>
            </select>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="checkbox" value="1" name="inputLastName" id="inputLastName">
              Inclure un match pour la 3ème place après les demi-finales perdant.
            </div>
          </div>
          </div>
        </div>
      <div class="modal-footer">
      <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">
        <span class="badge bg-primary">3</span>    
        Modal 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
            <h6>Nombre de participants</h6>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Nombre de participants" aria-label="Nombre de participants" aria-describedby="button-addon2">
              <button class="btn btn-outline-primary" type="button" id="button-addon2">Appliquer</button>
            </div>
					</div>
        </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">
        <span class="badge bg-primary">4</span>  
        Modal 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <h6>Nombre de groupes 0,1,2,3,4...</h6>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre de groupes 0,1,2,3,4..." aria-label="Nombre de groupes 0,1,2,3,4..." aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="button" id="button-addon2">Appliquer</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#modalCreationLigue" data-bs-toggle="modal" data-bs-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>
