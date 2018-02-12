<br>
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="breadcrumbs-title">Tableau de bord</h4>
        <ol class="breadcrumbs">
        </ol>
      </div>
    </div>
  </div>
</div>
<br>
<div id="card-stats">
  <?php $nbr_membre = 0;?>
  <?php $nbr_visite = 0;?>
  <?php $nbr_visiteur = 0;?>
  <?php $nbr_materiel = 0;?>
  <?php foreach($liste_membre->result() as $membre): $nbr_membre += 1; endforeach;?>
  <?php foreach($visite_actuel->result() as $visite): $nbr_visite += 1; endforeach;?>
  <?php foreach($visiteur_actuel->result() as $visiteur): $nbr_visiteur += 1; endforeach;?>
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Membres</p>
                                        <h4 class="card-stats-number"><?=$nbr_membre;?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Visites d'aujourd'hui</p>
                                        <h4 class="card-stats-number"><?=$nbr_visite;?></h4>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Visiteurs d'aujourd'hui</p>
                                        <h4 class="card-stats-number"><?=$nbr_visiteur;?></h4>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Matériels</p>
                                        <h4 class="card-stats-number">Nbr matériel</h4>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

                            <div class="col s12 m12 l4">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">Réservations</h4>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <label for="task1">Objet reservé . <a href="#" class="secondary-content"><span class="ultra-small">Date & heure</span></a>
                                        </label>
                                        <span class="task-cat teal">Nom Client</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <label for="task2">Objet reservé . <a href="#" class="secondary-content"><span class="ultra-small">Date & heure </span></a>
                                        </label>
                                        <span class="task-cat purple">Nom Client</span>
                                    </li>
                                </ul>
                            </div>
                            <div id="work-collections">
                              <ul id="projects-collection" class="collection">
                                  <li class="collection-item avatar">
                                      <i class="mdi-file-folder circle light-blue darken-2"></i>
                                      <span class="collection-header">Projets</span>
                                  </li>
                                  <li class="collection-item">
                                      <div class="row">
                                          <div class="col s6">
                                              <p class="collections-title">Nom du projet</p>
                                              <p class="collections-content">Description simple</p>
                                          </div>
                                          <div class="col s3">
                                              <span class="task-cat cyan">étiquette</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="collection-item">
                                      <div class="row">
                                          <div class="col s6">
                                              <p class="collections-title">Nom du projet</p>
                                              <p class="collections-content">Description simple</p>
                                          </div>
                                          <div class="col s3">
                                              <span class="task-cat grey darken-3">étiquette</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                            </div>
                        </div>
