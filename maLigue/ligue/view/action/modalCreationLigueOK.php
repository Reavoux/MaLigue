<!-- Modal -->
<div class="modal fade" id="modalCreationLigue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Création de ligue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
					<div class="row mb-3">
						<input type="email" class="form-control" id="NomLigue" placeholder="Nom de ligue">
					</div>
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
					<div class="row mb-3">
						<div class="col-md-6">
							<h6>Nombre de participants</h6>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Nombre de participants" aria-label="Nombre de participants" aria-describedby="button-addon2">
								<button class="btn btn-outline-primary" type="button" id="Nombre de participants">Appliquer</button>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<h6>Nombre de groupes 0,1,2,3,4...</h6>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Nombre de groupes 0,1,2,3,4..." aria-label="Nombre de groupes 0,1,2,3,4..." aria-describedby="button-addon2">
								<button class="btn btn-outline-primary" type="button" id="NombreDeGroupes">Appliquer</button>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-6">
							<h6>Ajouter une ressource</h6>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Nouvelle ressource" aria-label="Nouvelle ressource" aria-describedby="button-addon2">
								<button class="btn btn-outline-primary" type="button" id="NouvelleRessource">Appliquer</button>
							</div>
						</div>
					</div>
        </form>
      </div>
      <div class="modal-footer">
	  	<button type="button" class="btn btn-primary">Génère-la !</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>