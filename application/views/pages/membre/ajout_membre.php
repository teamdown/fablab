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
        <div class="input-field col s3">
          <input type="text" name="nom_membre" id="nom_membre" class="validate">
          <label for="nom_membre">Nom</label>
        </div>
        <div class="input-field col s4">
          <input type="text" name="prenom_membre" id="prenom_membre" class="validate">
          <label for="prenom_membre">Prénom(s)</label>
        </div>
        <div class="input-field col s2">
          <input type="text" name="sexe" id="sexe" class="validate">
          <label for="sexe">Sexe</label>
        </div>
        <div class="input-field col s3">
          <input type="text" name="statut" id="statut" class="validate">
          <label for="statut">Statut</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input type="email" name="email" id="email" class="validate" >
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="facebook" id="facebook">
          <label for="facebook">Facebook</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s2">
          <input type="text" name="tel_telma" id="tel_telma">
          <label for="tel_telma">Tel Telma</label>
        </div>
        <div class="input-field col s2">
          <input type="text" name="tel_orange" id="tel_orange">
          <label for="tel_orange">Tel Orange</label>
        </div>
        <div class="input-field col s2">
          <input type="text" name="tel_airtel" id="tel_airtel">
          <label for="tel_airtel">Tel Airtel</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s2">
          <input type="text" name="cin" id="cin">
          <label for="cin">CIN</label>
        </div>
        <div class="col s2">
          <label for="date_naissance">Date de naissance</label>
          <input type="date" name="date_naissance" id="date_naissance">
        </div>
        <div class="input-field col s8">
          <input type="text" name="adresse" id="adresse">
          <label for="adresse">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="remarque" id="remarque"></textarea>
          <label for="remarque">Remarque</label>
        </div>
      </div>
      <div class="row">
        <div class="col s2">
          <label for="adhesion">Date d'adhésion</label>
          <input type="date" name="adhesion" id="adhesion">
        </div>
        <div class="input-field col s2">
          <input type="text" name="recu_par" id="recu_par">
          <label for="recu_par">Reçu par</label>
        </div>
        <br><button class="btn btn-default" type="submit" name="ajouter" value="Ajouter">Ajouter</button>
      </div>
      <?= form_close();?>
</div>
