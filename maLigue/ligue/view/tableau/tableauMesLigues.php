                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i> Mes ligues
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Nom de ligue</th>
                                                <th>Joueurs</th>
                                                <th>Classement</th>
                                                <th>Age</th>
                                                <th>Date de création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="" href="?action=ligue">Tiger Nixon</a></td>
                                                <td>
                                                    16
                                                    |
                                                    <a href="#" style="color:#green" data-bs-toggle="modal" data-bs-target="#modalListeJoueurs"><i class="fas fa-users"></i></a>
                                                </td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <a href="#" style="color: green" data-bs-toggle="modal" data-bs-target="#modalInvitations"><i class="fas fa-user-plus"></i></a>
                                                    | 
                                                    <a href="#" style="color: orange" data-bs-toggle="modal" data-bs-target="#modalModificationRole"><i class="fas fa-user-cog"></i></a>
                                                    | 
                                                    <a href="#" style="color: red" data-bs-toggle="modal" data-bs-target="#modalSuppression"><i class="fas fa-user-minus"></i></a>
                                                    |
                                                    <a href="#" style="color: Black" data-bs-toggle="modal" data-bs-target="#modalArchiverSupprimerLigue"><i class="fas fa-user-injured"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--Mes includes -->
<?php include "view/action/modalCreationLigue.php"?>
<?php include "view/action/modalRejoindre.php"?>
<?php include "view/action/modalSpectateur.php"?>
<?php include "view/action/modalInvitations.php"?> 
<?php include "view/action/modalSuppression.php"?>
<?php include "view/action/modalListeJoueurs.php"?>
<?php include "view/action/modalModificationRole.php"?>
<?php include "view/action/modalSuppression.php"?>
<?php include "view/action/modalArchiverSupprimerLigue.php"?>


