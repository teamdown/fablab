<?php
  $user = $this->ion_auth->user()->row();
?>
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="breadcrumbs-title">Formulaire d'ajout membre</h4>
        <ol class="breadcrumbs">
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <?php
      if (isset($_POST['nom_membre']) and
          isset($_POST['prenom_membre']) and
          isset($_POST['email']) and
          isset($_POST['tel_telma']) and
          isset($_POST['tel_orange']) and
          isset($_POST['tel_airtel']) and
          isset($_POST['adresse']) and
          isset($_POST['cin']) and
          isset($_POST['facebook']) and
          isset($_POST['remarque']) and
          isset($_POST['adhesion']) and
          isset($_POST['recu_par']) and
          isset($_POST['date_naissance']))
      {
        echo validation_errors();
      }
    ?>
      <?=  form_open('fablab/ajout_membre');?>
      <div class="row">
        <div class="input-field col s12 m3">
          <input type="text" name="nom_membre" id="nom_membre" class="validate">
          <label for="nom_membre">Nom</label>
        </div>
        <div class="input-field col S12 m4">
          <input type="text" name="prenom_membre" id="prenom_membre" class="validate">
          <label for="prenom_membre">Prénom(s)</label>
        </div>
        <div class="input-field col s12 m2">
          <select name="sexe" id="sexe" class="validate">
            <option value="">--- Choisir sexe ---</option>
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
          </select>
          <label for="sexe">Sexe</label>
        </div>
        <div class="input-field col s12 m3">
          <select name="statut" id="statut" class="validate">
            <option value="">--- Choisir statut ---</option>
            <option value="etudiant">Etudiant</option>
            <option value="particulier">Particulier</option>
          </select>
          <label for="statut">Statut</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <i class="mdi-communication-email prefix"></i>
          <input type="email" name="email" id="email" class="validate" >
          <label for="email" data-error="Structure incorrecte" data-success="ok">Email</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="facebook" id="facebook" class="validate">
          <label for="facebook">Facebook</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m2">
          <i class="mdi-maps-local-phone prefix"></i>
          <input type="text" name="tel_telma" id="tel_telma" class="validate">
          <label for="tel_telma">Tel Telma</label>
        </div>
        <div class="input-field col s12 m2">
          <i class="mdi-maps-local-phone prefix"></i>
          <input type="text" name="tel_orange" id="tel_orange" class="validate">
          <label for="tel_orange">Tel Orange</label>
        </div>
        <div class="input-field col s12 m2">
          <i class="mdi-maps-local-phone prefix"></i>
          <input type="text" name="tel_airtel" id="tel_airtel" class="validate">
          <label for="tel_airtel">Tel Airtel</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m2">
          <i class="mdi-action-credit-card prefix"></i>
          <input type="text" name="cin" id="cin" class="validate">
          <label for="cin">CIN</label>
        </div>
        <div class="col s12 m2">
          <i class="mdi-action-today prefix"></i>
          <label for="date_naissance">Date de naissance</label>
          <input type="date" name="date_naissance" id="date_naissance" class="validate">
        </div>
        <div class="input-field col s12 m8">
          <i class="mdi-social-location-city prefix"></i>
          <input type="text" name="adresse" id="adresse" class="validate">
          <label for="adresse">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12">
          <i class="mdi-alert-warning prefix"></i>
          <textarea class="materialize-textarea" name="remarque" id="remarque" class="validate"></textarea>
          <label for="remarque">Remarque</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m2">
          <i class="mdi-action-today prefix"></i>
          <label for="adhesion">Date d'adhésion</label>
          <input type="date" name="adhesion" id="adhesion" class="validate">
        </div>
        <div class="input-field col s12 m2">
          <i class="mdi-social-person prefix"></i>
          <input type="text"  name="recu_par"  id="recu_par" class="validate">
          <label for="recu_par" value="">Reçu par</label>
        </div>
        <br><button class="btn btn-default" type="submit" name="ajouter" value="Ajouter">Ajouter</button>
      </div>
      <?= form_close();?>
</div>
