<div class="container">
  <?php $membre_present = 0;?>
  <?php foreach($visite_actuel->result() as $visite):?>
  <?php $membre_present += 1;?>
  <?php endforeach;?>
  <div class="card-panel white-text grey darken-2">
    <H5><?= $membre_present, " membre(s) présent(s) en ce moment.";?></H5>
  </div>
  <table class="centered responsive-table highlight">
    <thead>
      <tr>
        <th>N° Visite</th>
        <th>Date de visite</th>
        <th>Heure d'entrée</th>
        <th>Matricule Membre</th>
        <th colspan="3">Options</th>
      <tr>
    </thead>
    <tbody>
      <?php foreach($visite_actuel->result() as $visite):?>
        <tr>
          <td><?php echo $visite->id_visite;?></td>
          <td><?php echo $visite->date_visite;?></td>
          <td><?php echo $visite->heure_entre;?></td>
          <td><?php echo $visite->id_membre;?></td>
          <td><a class="btn btn-floating" href="<?= site_url('fablab/enregistrer_sortie').'/'.$visite->id_visite;?>"><i class="mdi-action-exit-to-app"></i></a></td>
          <td><a class="btn btn-floating waves-effect waves-light blue darken-3" href="<?= site_url('fablab/modifier_visite').'/'.$visite->id_membre;?>"><i class="mdi-editor-mode-edit"></i></a></td>
          <td><a class="btn btn-floating waves-effect waves-light red" href="<?= site_url('fablab/suppression_visite').'/'.$visite->id_membre;?>"><i class="mdi-action-delete"></i></a></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
