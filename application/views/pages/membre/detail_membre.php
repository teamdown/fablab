<?php foreach ($membre->result() as $row): ;?>
<h4>Détails sur le membre</h4>
<div class="container">
  <div class="row">
    <div class="col s4">
        <h5>Informations générales</h5>
        <u>Matricule :</u> <?=$row->id_membre;?><br>
        <u>Nom & prénom(s) :</u> <?=$row->nom_membre;?> <?=$row->prenom_membre;?><br>
        <u>Date de naissance :</u> <?=$row->date_naissance;?><br>
        <u>CIN :</u> <?=$row->cin;?><br>
        <u>Statut :</u> <?=$row->statut;?><br>
        <u>Sexe :</u> <?=$row->sexe;?>
    </div>
    <div class="col s4">
      <h5>Coordonnées</h5>
      <u>Adresse :</u> <?=$row->adresse;?><br>
      <u>Email :</u> <?=$row->email;?><br>
      <u>Facebook :</u> <?=$row->facebook;?><br>
      <u>Téléphone Telma :</u> <?=$row->tel_telma;?><br>
      <u>Téléphone Orange :</u> <?=$row->tel_orange;?><br>
      <u>Téléphone Airtel :</u> <?=$row->tel_airtel;?>
    </div>
    <div class="col s4">
        <h5>Adhésion</h5>
        <u>Remarque :</u> <?=$row->remarque;?><br>
        <u>Date d'adhésion :</u> <?=$row->adhesion;?><br>
        <u>Reçu par :</u> <?=$row->recu_par;?>
    </div>
  </div>
</div>
<?php endforeach;?>
