<br>
  <div class="row">
    <div class="col s12 m4">
      <h4>Membres</h4>
    </div>
    <div class="col s12 m4">
    </div><br>
      <a class="waves-effect waves-light btn-large col m3"><i class="material-icons left">add</i>Ajouter nouveau</a><br>
      <table class="centered">
        <thead>
          <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom(s)</th>
            <th>Email</th>
            <th colspan="3">Options</th>
          <tr>
        </thead>
        <tbody>
          <?php foreach($liste_membre->result() as $membre):?>
          <tr>
            <td><?php echo $membre->id_membre;?></td>
            <td><?php echo $membre->nom_membre;?></td>
            <td><?php echo $membre->prenom_membre;?></td>
            <td><?php echo $membre->email;?></td>
            <td><a class="btn btn-floating" href="<?= site_url('fablab/detail_membre').'/'.$membre->id_membre;?>"><i class="material-icons">details</i></a></td>
            <td><a class="btn btn-floating blue darken-3" href="<?= site_url('fablab/modifier_membre').'/'.$membre->id_membre;?>"><i class="material-icons">edit</i></a></td>
            <td><a class="btn btn-floating red" href="<?= site_url('fablab/suppression_membre').'/'.$membre->id_membre;?>"><i class="material-icons">delete</i></a></td>
          </tr>
          <?php endforeach;?>
      </table>
</div>
