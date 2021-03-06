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
    <?php foreach ($membre->result() as $row): ;?>
      <?=  form_open('fablab/modifier_membre');?>
      <input type="hidden" name="hidden_id" value="<?= $row->id_membre;?>">
      <div class="row">
        <div class="input-field col s12 m3">
          <input type="text" name="nom_membre" value="<?= $row->nom_membre;?>" id="nom_membre" class="validate">
          <label for="nom_membre">Nom</label>
        </div>
        <div class="input-field col s12 m4">
          <input type="text" name="prenom_membre" value="<?= $row->prenom_membre;?>" id="prenom_membre" class="validate">
          <label for="prenom_membre">Prénom(s)</label>
        </div>
        <div class="input-field col s12 m2">
          <input type="text" name="sexe" value="<?= $row->sexe;?>" id="sexe" class="validate">
          <label for="sexe">Sexe</label>
        </div>
        <div class="input-field col s12 m3">
          <input type="text" name="statut" value="<?= $row->statut;?>" id="statut" class="validate">
          <label for="statut">Statut</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input type="email" name="email" id="email" value="<?= $row->email;?>" class="validate" >
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="facebook" value="<?= $row->facebook;?>" id="facebook">
          <label for="facebook">Facebook</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m2">
          <input type="text" name="tel_telma" value="<?= $row->tel_telma;?>" id="tel_telma">
          <label for="tel_telma">Tel Telma</label>
        </div>
        <div class="input-field col s12 m2">
          <input type="text" name="tel_orange" value="<?= $row->tel_orange;?>" id="tel_orange">
          <label for="tel_orange">Tel Orange</label>
        </div>
        <div class="input-field col s12 m2">
          <input type="text" name="tel_airtel" value="<?= $row->tel_airtel;?>" id="tel_airtel">
          <label for="tel_airtel">Tel Airtel</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m2">
          <input type="text" name="cin" value="<?= $row->cin;?>" id="cin">
          <label for="cin">CIN</label>
        </div>
        <div class="col s12 m2">
          <label for="date_naissance">Date de naissance</label>
          <input type="date" name="date_naissance" value="<?= $row->date_naissance;?>" id="date_naissance">
        </div>
        <div class="input-field col s12 m8">
          <input type="text" name="adresse" value="<?= $row->adresse;?>" id="adresse">
          <label for="adresse">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12">
          <textarea class="materialize-textarea" name="remarque" value="<?= $row->remarque;?>" id="remarque"></textarea>
          <label for="remarque">Remarque</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m2">
          <label for="adhesion">Date d'adhésion</label>
          <input type="date" name="adhesion" value="<?= $row->adhesion;?>" id="adhesion">
        </div>
        <div class="input-field col s12 m2">
          <input type="text" name="recu_par" value="<?= $row->recu_par;?>" id="recu_par">
          <label for="recu_par">Reçu par</label>
        </div>
        <br><button class="btn btn-default" type="submit" name="modifier" value="Modifier">Modifier</button>
      </div>
      <?= form_close();?>
    <?php endforeach;?>
</div>
