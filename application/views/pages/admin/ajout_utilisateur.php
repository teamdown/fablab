<div class="container">
  <?php
    if (isset($_POST['utilisateur']) and
        isset($_POST['motdepasse']) and
        isset($_POST['motdepasse_confirm']) and
        isset($_POST['email']) and
        isset($_POST['role']))
    {
      echo validation_errors();
    }
  ?>
  <?=form_open('fablab/ajout_utilisateur');?>
    <div class="row">
      <div class="input-field col s12 m6">
        <input type="text" name="utilisateur" id="utilisateur" class="validate">
        <label for="utilisateur">Nom d'utilisateur</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6">
        <input type="password" name="motdepasse" id="motdepasse_confirm" class="validate">
        <label for="motdepasse">Mot de passe</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="password" name="motdepasse_confirm" id="motdepasse_confirm" class="validate">
        <label for="motdepasse_confirm">Confirmation Mot de passe</label>
      </div>
      <div class="input-field col s12 m6">
        <input type="email" name="email" id="email" class="validate">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" name="nom" id="nom" class="validate">
        <label for="nom">Nom(Facultatif)</label>
      </div>
      <div class="input-field col s12 m3">
        <input type="text" name="prenom" id="prenom" class="validate">
        <label for="prenom">Prenom(Facultatif)</label>
      </div>
      <div class="input-field col s12 m3">
        <select name="role" id="role">
          <option value="">--- Choisir rôle ---</option>
          <option value="admin">Administrateur</option>
          <option value="members">Simple utilisateur</option>
        </select>
        <label for="role">Rôle</label>
      </div>
    </div>
    <button class="btn btn-default" type="submit" name="ajouter" value="Ajouter">Ajouter</button>
  <?=form_close();?>
</div>
