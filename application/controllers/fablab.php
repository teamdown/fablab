<?php
    class Fablab extends CI_Controller {
      public function __construct()
    	{
    		parent:: __construct();
    		$this->load->helper(array('assets', 'url'));
    		$this->load->library('form_validation', 'session');
    	}

      //ACCUEIL
      public function index()
      {
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('layouts/footer');
      }

      //PAGE MEMBRE
      public function index_membre()
      {
        $this->load->model("membre_model");
        $data["liste_membre"] = $this->membre_model->lister_membre_asc();
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('pages/membre/membre', $data);
        $this->load->view('layouts/footer');
      }

      //PAGE AJOUT Membre
      public function ajout_membre()
      {
        $this->load->library('form_validation');
          $this->form_validation->set_rules("nom_membre", "Nom", 'required');
          $this->form_validation->set_rules("prenom_membre", "Prénom(s)", 'required');
          $this->form_validation->set_rules("sexe", "Sexe", 'required');
          $this->form_validation->set_rules("statut", "Statut", 'required');
          $this->form_validation->set_rules("prenom_membre", "Prénom(s)", 'required');
          $this->form_validation->set_rules("cin", "CIN");
          $this->form_validation->set_rules("date_naissance", "Date de naissance", 'required');
          $this->form_validation->set_rules('email', 'Email');
          $this->form_validation->set_rules("facebook", "Facebook");
      		$this->form_validation->set_rules('tel_telma', 'Tel Telma');
          $this->form_validation->set_rules("tel_orange", "Tel Orange");
          $this->form_validation->set_rules("tel_airtel", "Tel Airtel");
      		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
          $this->form_validation->set_rules("remarque", "Remarque");
          $this->form_validation->set_rules("adhesion", "adhesion");
          $this->form_validation->set_rules("recu_par", "Reçu par");

    		if($this->form_validation->run())
    		{
    				$this->load->model('membre_model');
    				$data= array
    					(
    						'nom_membre'=>$this->input->post('nom_membre'),
    						'prenom_membre'=>$this->input->post('prenom_membre'),
                'sexe'=>$this->input->post('sexe'),
                'statut'=>$this->input->post('statut'),
    						'email'=>$this->input->post('email'),
                'facebook'=>$this->input->post('facebook'),
    						'tel_telma'=>$this->input->post('tel_telma'),
                'tel_orange'=>$this->input->post('tel_orange'),
                'tel_airtel'=>$this->input->post('tel_airtel'),
    						'adresse'=>$this->input->post('adresse'),
    						'cin'=>$this->input->post('cin'),
                'date_naissance'=>$this->input->post('date_naissance'),
                'remarque'=>$this->input->post('remarque'),
                'adhesion'=>$this->input->post('adhesion'),
                'recu_par'=>$this->input->post('recu_par'),

    					);
    				if($this->input->post("ajouter"))
                    {
                         $this->membre_model->ajouter_membre($data);
                         redirect(site_url('fablab/index'));
                    }
                    else{

                    }
    		}
    		else
    		{
    			$this->load->view('layouts/header');
    			$this->load->view('layouts/nav');
    			$this->load->view('pages/membre/ajout_membre');
    			$this->load->view('layouts/footer');
    		}
      }

      //PAGE DETAIL MEMBRE
      public function detail_membre($id_membre = '')
      {
        $this->load->model("membre_model");
        $data['membre'] = $this->membre_model->fetch_single_membre($id_membre);
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('pages/membre/detail_membre', $data);
        $this->load->view('layouts/footer');
      }

      //MODIFIER MEMBRE
      public function modifier_membre($id_membre = '')
      {
        $this->load->library('form_validation');
          $this->form_validation->set_rules("nom_membre", "Nom", 'required');
          $this->form_validation->set_rules("prenom_membre", "Prénom(s)", 'required');
          $this->form_validation->set_rules("sexe", "Sexe", 'required');
          $this->form_validation->set_rules("statut", "Statut", 'required');
          $this->form_validation->set_rules("prenom_membre", "Prénom(s)", 'required');
          $this->form_validation->set_rules("cin", "CIN");
          $this->form_validation->set_rules("date_naissance", "Date de naissance", 'required');
          $this->form_validation->set_rules('email', 'Email');
          $this->form_validation->set_rules("facebook", "Facebook");
      		$this->form_validation->set_rules('tel_telma', 'Tel Telma');
          $this->form_validation->set_rules("tel_orange", "Tel Orange");
          $this->form_validation->set_rules("tel_airtel", "Tel Airtel");
      		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
          $this->form_validation->set_rules("remarque", "Remarque");
          $this->form_validation->set_rules("adhesion", "adhesion");
          $this->form_validation->set_rules("recu_par", "Reçu par");

    		if($this->form_validation->run())
    		{
    				$this->load->model('membre_model');
    				$data= array
    					(
    						'nom_membre'=>$this->input->post('nom_membre'),
    						'prenom_membre'=>$this->input->post('prenom_membre'),
                'sexe'=>$this->input->post('sexe'),
                'statut'=>$this->input->post('statut'),
    						'email'=>$this->input->post('email'),
                'facebook'=>$this->input->post('facebook'),
    						'tel_telma'=>$this->input->post('tel_telma'),
                'tel_orange'=>$this->input->post('tel_orange'),
                'tel_airtel'=>$this->input->post('tel_airtel'),
    						'adresse'=>$this->input->post('adresse'),
    						'cin'=>$this->input->post('cin'),
                'date_naissance'=>$this->input->post('date_naissance'),
                'remarque'=>$this->input->post('remarque'),
                'adhesion'=>$this->input->post('adhesion'),
                'recu_par'=>$this->input->post('recu_par'),

    					);
    				if($this->input->post("modifier"))
                    {
                         $this->membre_model->modifier_membre($data, $this->input->post("hidden_id"));
                         redirect(site_url('fablab/index_membre'));
                    }
                    else{

                    }
    		}
    		else
    		{
          $this->load->model("membre_model");
          $data['membre'] = $this->membre_model->fetch_single_membre($id_membre);
    			$this->load->view('layouts/header');
    			$this->load->view('layouts/nav');
    			$this->load->view('pages/membre/modifier_membre', $data);
    			$this->load->view('layouts/footer');
    		}
      }

      //SUPPRESSION MEMBRE
      public function suppression_membre($id_membre='')
    	{
    		$this->load->model('membre_model');
    		$this->membre_model->supprimer_membre($id_membre);
    		redirect(site_url('fablab/index_membre'));
    	}

      //PAGE VISITE
      public function visite()
    	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules("id_membre", "Matricule membre", 'required');
    		if($this->form_validation->run())
    		{
    				$this->load->model('visite_model');
    				$data= array
    					(
    						'id_membre'=>$this->input->post('id_membre'),
                'date_visite'=>date("Y-m-d"),
                'heure_entre'=>date("H:i:s"),
    					);
    				if($this->input->post("entree"))
              {
                $this->visite_model->enregistrer_visite($data);
                redirect(site_url('fablab/visite'));
              }
              else {
                echo "ERROR";
              }
    		}
    		else
    		{
          $this->load->model("visite_model");
          $data["visite_actuel"] = $this->visite_model->lister_visite_actuel();
    			$this->load->view('layouts/header');
    			$this->load->view('layouts/nav');
    			$this->load->view('pages/visite/enregistrer_visite');
          $this->load->view('pages/visite/visite_actuel', $data);
    			$this->load->view('layouts/footer');
    		}
    	}

      //ENREGISTRER SORTIE
      public function enregistrer_sortie($id_visite='')
      {
        $this->load->model('visite_model');
    		$this->visite_model->enregistrer_sortie($id_visite);
    		redirect(site_url('fablab/visite'));
      }
}
