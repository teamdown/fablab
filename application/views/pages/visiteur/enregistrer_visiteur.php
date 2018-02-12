<br>
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="breadcrumbs-title">Visiteur actuel</h4>
        <ol class="breadcrumbs">
        </ol>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
<?php
  if (isset($_POST['nom_prenom_visiteur']))
  {
    echo validation_errors();
  }
?>
<?=  form_open('fablab/visiteur');?>
  <div class="row">
    <div class="input-field col s12 m6">
      <input type="text" name="nom_prenom_visiteur" id="nom_prenom_visiteur" class="validate">
      <label for="id_membre">Nom & prénom(s) visiteur</label>
    </div>
    <br>
    <button class="btn waves-effect waves-light col s12 m3" type="submit" name="entree" value="Entrée">Enregistrer Visiteur</button>
  </div>
<?= form_close();?>
</div>
