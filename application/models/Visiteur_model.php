<?php
	if(!defined('BASEPATH')) exit('No Direct Script access allowed');

	class visiteur_model extends CI_Model{
		private $table= 'visiteur';

		public function __construct(){
			parent:: __construct();
		}

	//LISTE VISITE ACTUEL
		public function lister_visiteur_actuel()
		{
			$this->db->select("*");
      $this->db->from("visiteur");
      $this->db->where("heure_sortie", NULL);
      $query = $this->db->get();
      return $query;
		}

	//SELECTION UNE VISITE
		public function fetch_single_visiteur($id_visiteur='')
	      {
	        $this->db->where("id_visiteur", $id_visiteur);
	        $query = $this->db->get("visiteur");
	        return $query;
	      }

	//ENREGISTREMENT VISITE
		public function enregistrer_visiteur($data)
		{
			$this->db->insert("visiteur", $data);
		}

    //ENREGISTREMENT SORTIE VISITE
  		public function enregistrer_sortie_visiteur($id_visiteur='')
  		{
        $this->db->where("id_visiteur", $id_visiteur);
        $this->db->set("heure_sortie", date("H:i:s"));
        $this->db->update("visiteur");
  		}

	//SUPPRIMER VISITE
		public function supprimer_visiteur($id_visiteur='')
		{
			$this->db->where("id_visiteur", $id_visiteur);
      $this->db->delete("visiteur");
		}

	//MODIFIER VISITE
		public function modifier_visiteur($data, $id_visiteur)
		{
			$this->db->where("id_visiteur", $id_visiteur);
           	$this->db->update("visiteur", $data);
		}
	}
?>
