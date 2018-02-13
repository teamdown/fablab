<?php
	if(!defined('BASEPATH')) exit('No Direct Script access allowed');

	class Membre_model extends CI_Model{
		private $table= 'membre';

		public function __construct(){
			parent:: __construct();
		}

	//LISTE MEMBRE ASCENDANT
		public function lister_membre_asc(){
			$this->db->select("*");
            $this->db->from("membre");
            $query = $this->db->get();
            return $query;
		}

	//SELECTION UN MEMBRE
		public function fetch_single_membre($id_membre='')
	      {
	        $this->db->where("id_membre", $id_membre);
	        $query = $this->db->get("membre");
	        return $query;
	      }

	//AJOUT MEMBRE
		public function ajouter_membre($data)
		{
			$this->db->insert("membre", $data);
		}

	//SUPPRIMER MEMBRE
		public function supprimer_membre($id_membre='')
		{
			$this->db->where("id_membre", $id_membre);
          	$this->db->delete("membre");
		}

	//MODIFIER MEMBRE
		public function modifier_membre($data, $id_membre)
		{
			$this->db->where("id_membre", $id_membre);
           	$this->db->update("membre", $data);
		}
	}
?>
