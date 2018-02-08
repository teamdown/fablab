<br>
  <div class="row">
    <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h4 class="breadcrumbs-title">Membres</h4>
                <ol class="breadcrumbs">
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <br>
      <center><a href="<?= site_url('fablab/ajout_membre');?>" class="waves-effect waves-light btn-large"><i class="mdi-social-person-add"></i> Ajouter nouveau</a></center>
      <br><br>
      <?php $nbr_membre = 0;?>
      <?php foreach($liste_membre->result() as $membre):
        $nbr_membre += 1;
       endforeach;?>
       Nombre membres : <?= $nbr_membre;?>
      <div>
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
            <td><a class="btn btn-floating" href="<?= site_url('fablab/detail_membre').'/'.$membre->id_membre;?>"><i class="mdi-action-visibility"></i></a></td>
            <td><a class="btn btn-floating blue darken-3" href="<?= site_url('fablab/modifier_membre').'/'.$membre->id_membre;?>"><i class="mdi-editor-mode-edit"></i></a></td>
            <td><a class="btn btn-floating red" href="<?= site_url('fablab/suppression_membre').'/'.$membre->id_membre;?>"><i class="mdi-action-delete"></i></a></td>
          </tr>
          <?php endforeach;?>
      </table>
    </div>
</div>
