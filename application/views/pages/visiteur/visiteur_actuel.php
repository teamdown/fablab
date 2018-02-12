<div class="container">
  <?php $visiteur_present = 0;?>
  <?php foreach($visiteur_actuel->result() as $visiteur):?>
  <?php $visiteur_present += 1;?>
  <?php endforeach;?>
  <div class="card-panel white-text grey darken-2">
    <H5><?= $visiteur_present, " visiteur(s) présent(s) en ce moment.";?></H5>
  </div>
  <table class="centered responsive-table highlight">
    <thead>
      <tr>
        <th>N° Visiteur</th>
        <th>Date de visite</th>
        <th>Heure d'entrée</th>
        <th>Nom & prénom(s) visiteur</th>
        <th colspan="3">Options</th>
      <tr>
    </thead>
    <tbody>
      <?php foreach($visiteur_actuel->result() as $visiteur):?>
        <tr>
          <td><?php echo $visiteur->id_visiteur;?></td>
          <td><?php echo $visiteur->date_visite;?></td>
          <td><?php echo $visiteur->heure_entre;?></td>
          <td><?php echo $visiteur->nom_prenom_visiteur;?></td>
          <td><a class="btn btn-floating" href="<?= site_url('fablab/enregistrer_sortie_visiteur').'/'.$visiteur->id_visiteur;?>"><i class="mdi-action-exit-to-app"></i></a></td>
          <td><a class="btn btn-floating waves-effect waves-light blue darken-3" href="<?= site_url('fablab/modifier_visiteur').'/'.$visiteur->id_visiteur;?>"><i class="mdi-editor-mode-edit"></i></a></td>
          <td><a class="btn btn-floating waves-effect waves-light red" href="<?= site_url('fablab/suppression_visiteur').'/'.$visiteur->id_visiteur;?>"><i class="mdi-action-delete"></i></a></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
