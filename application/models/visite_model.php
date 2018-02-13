<?php
	if(!defined('BASEPATH')) exit('No Direct Script access allowed');

	class Visite_model extends CI_Model{
		private $table= 'visite';

		public function __construct(){
			parent:: __construct();
		}

	//LISTE VISITE ACTUEL
		public function lister_visite_actuel(){
			$this->db->select("*");
      $this->db->from("visite");
      $this->db->where("heure_sortie", NULL);
      $query = $this->db->get();
      return $query;
		}

		//LISTE VISITE AUJOURD'HUI
			public function lister_visite_aujourdhui(){
				$this->db->select("*");
	      $this->db->from("visite");
	      $this->db->where("date_visite", date('Y-m-d'));
	      $query = $this->db->get();
	      return $query;
			}

	//SELECTION UNE VISITE
		public function fetch_single_visite($id_visite='')
	      {
	        $this->db->where("id_visite", $id_visite);
	        $query = $this->db->get("visite");
	        return $query;
	      }

	//ENREGISTREMENT VISITE
		public function enregistrer_visite($data)
		{
			$this->db->insert("visite", $data);
		}

    //ENREGISTREMENT SORTIE VISITE
  		public function enregistrer_sortie($id_visite='')
  		{
        $this->db->where("id_visite", $id_visite);
        $this->db->set("heure_sortie", date("H:i:s"));
        $this->db->update("visite");
  		}

	//SUPPRIMER VISITE
		public function supprimer_visite($id_visite='')
		{
			$this->db->where("id_visite", $id_visite);
      $this->db->delete("visite");
		}

	//MODIFIER VISITE
		public function modifier_visite($data, $id_visite)
		{
			$this->db->where("id_visite", $id_visite);
           	$this->db->update("visite", $data);
		}
	}
?>
