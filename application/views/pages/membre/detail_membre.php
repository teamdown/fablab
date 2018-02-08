<br>
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="breadcrumbs-title">Détails membre</h4>
        <ol class="breadcrumbs">
        </ol>
      </div>
    </div>
  </div>
</div>
<?php foreach ($membre->result() as $row): ;?>
  <div class="row">
      <div class="col s12 m4 l4">
          <ul id="task-card" class="collection with-header">
              <li class="collection-header light-blue darken-4">
                  <h4 class="task-card-title"><i class="mdi-action-info"></i> Infos générales</h4>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Matricule :</b>
                  </div>
                  <?=$row->id_membre;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Nom & prénom(s) :</b>
                  </div>
                  <div class="col s6">
                  <?=$row->nom_membre." ".$row->prenom_membre;?>
                  </div>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Date de naissance :</b>
                  </div>
                  <?=$row->date_naissance;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>CIN :</b>
                  </div>
                  <?=$row->cin;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Statut :</b>
                  </div>
                  <?=$row->statut;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Sexe :</b>
                  </div>
                  <?=$row->sexe;?>
                </div>
              </li>
          </ul>
      </div>
      <div class="col s12 m4 l4">
          <ul id="task-card" class="collection with-header">
              <li class="collection-header orange darken-3">
                  <h4 class="task-card-title"><i class="mdi-action-explore"></i> Coordonnées</h4>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Adresse :</b>
                  </div>
                  <?=$row->adresse;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Email :</b>
                  </div>
                  <?=$row->email;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Facebook :</b>
                  </div>
                  <?=$row->facebook;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Tel Telma :</b>
                  </div>
                  <?=$row->tel_telma;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Tel Orange :</b>
                  </div>
                  <?=$row->tel_orange;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s4">
                    <b>Tel Airtel :</b>
                  </div>
                  <?=$row->tel_airtel;?>
                </div>
              </li>
          </ul>
      </div>
      <div class="col s12 m4 l4">
          <ul id="task-card" class="collection with-header">
              <li class="collection-header green darken-3">
                  <h4 class="task-card-title"><i class="mdi-action-spellcheck"></i> Adhésion</h4>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Remarque :</b>
                  </div>
                  <?=$row->remarque;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>Date d'adhésion :</b>
                  </div>
                  <?=$row->adhesion;?>
                </div>
              </li>
              <li class="collection-item dismissable">
                <div class="row">
                  <div class="col s6">
                    <b>reçu par :</b>
                  </div>
                  <?=$row->recu_par;?>
                </div>
              </li>
          </ul>
      </div>
  </div>
<?php endforeach;?>
