<!-- Modal -->
<div class="modal fade" id="modalModificationRole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Paramètrage de la ligue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <h6>Nom de ligue</h6>
              <input type="email" disabled="disabled" class="form-control" id="Nom de ligue" placeholder="Nom de ligue">
            </div>
            <div class="col-md-6">
              <h6>Changement de nom</h6>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nouveau nom" aria-label="Nouveau nom" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="button" id="NouveauNom"><i class="fas fa-check"></i></button>
              </div>
            </div>
            <hr class="dropdown-divider"/>
            <div class="col-md-6">
              <h6>Nombre de participants</h6>
                <input type="email" class="form-control" disabled="disabled" id="NombreDeParticipants" placeholder="Nombre de participants">
            </div>
              <div class="col-md-6">
              <h6>Modification du nombre de participants</h6>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre de participants" aria-label="Nombre de participants" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="button" id="NombreDePaarticipants"><i class="fas fa-check"></i></button>
              </div>
            </div>
            <div class="col-md-6">
              <h6>Nombre de groupes</h6>
                <input type="email" class="form-control" disabled="disabled" id="exampleFormControlInput1" placeholder="Nombre de groupes">
            </div>
              <div class="col-md-6">
              <h6>Modification du nombre de groupes</h6>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre de groupes" aria-label="Nombre de groupes" aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="button" id="NombreDeGroupe"><i class="fas fa-check"></i></button>
              </div>
            </div>   
            <div class="col-md-6">
              <h6>Modification du rôle</h6>
              <select class="form-select" aria-label="Default select example">
                <option hidden>Participants</option>
                <option value="1">Reav</option>
                <option value="2">Darelik</option>
                <option value="3">Elmios</option>
              </select>
            </div>
            <div class="col-md-6">
              <h6>Nouveau rôle</h6>
              <div class="input-group">
                <select class="form-select" id="NouveauRole" aria-label="Example select with button addon">
                  <option selected>Choose...</option>
                  <option value="1">Admin / Joueur</option>
                  <option value="2">Joueur</option>
                  <option value="3">Spectateur</option>
                </select>
                <button class="btn btn-outline-primary" type="button"><i class="fas fa-check"></i></button>
              </div>
            </div>
            <hr class="dropdown-divider"/>
            <div class="row mb-3">
              <div class="col-md-6">
                <h6>Ajouter une ressource</h6>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nouvelle ressource" aria-label="Nouvelle ressource" aria-describedby="button-addon2">
                  <button class="btn btn-outline-primary" type="button" id="NouvelleRessource"><i class="fas fa-check"></i></button>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <h6>Ressource actuelle</h6>
                <div class="input-group">
                  <select class="form-select" id="RessourceActuelle" aria-label="Example select with button addon">
                    <option hidden>Liste des ressources</option>
                    <option value="1">Blessure</option>
                    <option value="2">Mort</option>
                    <option value="3">Or</option>
                    <option value="3">Argent</option>
                  </select>
                  <button class="btn btn-outline-danger" type="button"><i class="fas fa-times"></i></button>
                </div>
              </div>
                <div class="col-md-6">
                <h6>Ressource à modifier</h6>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Nouveau nom" aria-label="Nouveau nom" aria-describedby="button-addon2">
                  <button class="btn btn-outline-success" type="button" id="RessourceAModifier"><i class="fas fa-check"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>