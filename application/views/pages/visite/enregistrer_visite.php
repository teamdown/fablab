<br>
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h4 class="breadcrumbs-title">Visite actuel</h4>
        <ol class="breadcrumbs">
        </ol>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
<?php
  if (isset($_POST['id_membre']))
  {
    echo validation_errors();
  }
?>
<?=  form_open('fablab/visite');?>
  <div class="row">
    <div class="input-field col s6">
      <input min="1" type="number" name="id_membre" id="id_membre" class="validate">
      <label for="id_membre">Matricule membre</label>
    </div>
    <br>
    <button class="btn waves-effect waves-light" type="submit" name="entree" value="Entrée">Enregistrer Entrée</button>
  </div>
<?= form_close();?>
</div>
