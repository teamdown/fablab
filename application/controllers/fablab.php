<?php
    class Fablab extends CI_Controller {
      public function __construct()
    	{
    		parent:: __construct();
    		$this->load->helper(array('assets', 'url'));
    		$this->load->library('form_validation', 'session');
    	}

######################################################################################################

      //ACCUEIL FABLAB
      public function index()
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->model('membre_model');
        $this->load->model('visite_model');
        $this->load->model('visiteur_model');

        $data["liste_membre"] = $this->membre_model->lister_membre_asc();
        $data["visite_actuel"] = $this->visite_model->lister_visite_aujourdhui();
        $data["visiteur_actuel"] = $this->visiteur_model->lister_visiteur_actuel();

        $this->load->view('layouts/header');
        $this->load->view('pages/accueil', $data);
        $this->load->view('layouts/footer');
        }
      }

######################################################################################################

      //PAGE MEMBRE
      public function index_membre()
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->model("membre_model");
        $data["liste_membre"] = $this->membre_model->lister_membre_asc();
        $this->load->view('layouts/header');
        $this->load->view('pages/membre/membre', $data);
        $this->load->view('layouts/footer');
        }
      }

      //PAGE AJOUT Membre
      public function ajout_membre()
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
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
    			$this->load->view('pages/membre/ajout_membre');
    			$this->load->view('layouts/footer');
    		}
        }
      }

      //PAGE DETAIL MEMBRE
      public function detail_membre($id_membre = '')
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->model("membre_model");
        $data['membre'] = $this->membre_model->fetch_single_membre($id_membre);
        $this->load->view('layouts/header');
        $this->load->view('pages/membre/detail_membre', $data);
        $this->load->view('layouts/footer');
        }
      }

      //MODIFIER MEMBRE
      public function modifier_membre($id_membre = '')
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
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
    			$this->load->view('pages/membre/modifier_membre', $data);
    			$this->load->view('layouts/footer');
    		}
        }
      }

      //SUPPRESSION MEMBRE
      public function suppression_membre($id_membre='')
    	{
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
    		$this->load->model('membre_model');
    		$this->membre_model->supprimer_membre($id_membre);
    		redirect(site_url('fablab/index_membre'));
        }
    	}

######################################################################################################

      //PAGE VISITE
      public function visite()
    	{
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
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
    			$this->load->view('pages/visite/enregistrer_visite');
          $this->load->view('pages/visite/visite_actuel', $data);
    			$this->load->view('layouts/footer');
    		}
        }
    	}

      //ENREGISTRER SORTIE
      public function enregistrer_sortie($id_visite='')
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->model('visite_model');
    		$this->visite_model->enregistrer_sortie($id_visite);
    		redirect(site_url('fablab/visite'));
        }
      }

######################################################################################################

      //PAGE VISITE
      public function visiteur()
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nom_prenom_visiteur", "Nom & prénom(s) visiteur", 'required');
        if($this->form_validation->run())
        {
            $this->load->model('visiteur_model');
            $data= array
              (
                'nom_prenom_visiteur'=>$this->input->post('nom_prenom_visiteur'),
                'date_visite'=>date("Y-m-d"),
                'heure_entre'=>date("H:i:s"),
              );
            if($this->input->post("entree"))
              {
                $this->visiteur_model->enregistrer_visiteur($data);
                redirect(site_url('fablab/visiteur'));
              }
              else {
                echo "ERROR";
              }
        }
        else
        {
          $this->load->model("visiteur_model");
          $data["visiteur_actuel"] = $this->visiteur_model->lister_visiteur_actuel();
          $this->load->view('layouts/header');
          $this->load->view('pages/visiteur/enregistrer_visiteur');
          $this->load->view('pages/visiteur/visiteur_actuel', $data);
          $this->load->view('layouts/footer');
        }
        }
      }

      //ENREGISTRER SORTIE
      public function enregistrer_sortie_visiteur($id_visiteur='')
      {
        if (!$this->ion_auth->logged_in())
        {
          redirect(site_url('fablab/login'));
        }
        else
        {
        $this->load->model('visiteur_model');
        $this->visiteur_model->enregistrer_sortie_visiteur($id_visiteur);
        redirect(site_url('fablab/visiteur'));
        }
      }

      public function login()
      {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("utilisateur", "Utilisateur", 'required');
        $this->form_validation->set_rules("motdepasse", "Mot de passe", 'required');
    		if($this->form_validation->run())
        {
          $identity = $this->input->post('utilisateur');
      		$password = $this->input->post('motdepasse');
          $remember = (bool)$this->input->post('remember-me');
          if($this->input->post("connecter"))
            {
              if ($this->ion_auth->login($identity, $password, $remember))
              {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect(site_url('fablab/index'));
              }else
              {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
        				redirect('fablab/login', 'refresh');
              }
            }
            else {

            }
        }
        else{
        $this->load->view('user-login');
        }
      }

      public function logout()
      {
        $this->ion_auth->logout();
        redirect(site_url('fablab/index'));
      }
      //Fin enregistrer_sortie

      //AJOUT D'UTILISATEUR
      public function ajout_utilisateur()
      {
        if (!$this->ion_auth->logged_in()) //Si non connecté
        {
          redirect('fablab/login', 'refresh');
        }
        else //si connecté
        {
          if (!$this->ion_auth->is_admin()) //Si non admin
          {
            redirect(site_url('fablab/index'));
          }
          else //Si admin
          {
            $this->load->library('form_validation');

            $this->form_validation->set_rules("utilisateur", "Nom d'utilisateur", 'required');
            $this->form_validation->set_rules("motdepasse", "Mot de passe", 'required');
            $this->form_validation->set_rules("motdepasse_confirm", "Confirmation Mot de passe", 'required');
            $this->form_validation->set_rules("email", "Email", 'required');
            $this->form_validation->set_rules("role", "Rôle", 'required');
            if($this->form_validation->run())
            {
              $username = $this->input->post('utilisateur');
              $password = $this->input->post('motdepasse');
              $email = $this->input->post('email');
              $additional_data = array(
                                          'first_name' => $this->input->post('nom'),
                                          'last_name' => $this->input->post('prenom'),
                                      );
              if ($this->input->post('role') == admin)
              {
                $group = array('1');// set user to admin
              }
              else
              {
                $group = array('2');
              }

              if ($this->input->post('ajouter')) // Si bouton Ajouter cliqué
              {
                $this->ion_auth->register($username, $password, $email, $additional_data, $group);
                redirect(site_url('fablab/index'));
              }
              else {
                echo "ERROR";
              }
            }
            else // Sinon affiché formulaire d'ajout
            {
              $this->load->view('layouts/header');
              $this->load->view('pages/admin/ajout_utilisateur');
              $this->load->view('layouts/footer');
            }
          }
        }
      }
}
