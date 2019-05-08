<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 09/10/2018
 * Time: 16:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginCtrl extends CI_Controller
{
	public function index() {
		//      $data = array('nom' => 'Robert');

		// On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

		// On affiche notre page avec le template
		$this->load->helper('url');
		//$page = $this->load->view('web/Collection')
		$this->load->model('LoginModel');
		$this->load->view('index');

	}
	public function connexion(){
		$this->load->helper('url');
		$form_log = $this->input->post('user');
		$form_mdp = $this->input->post('pass');
		$this->load->model('LoginModel');
		$isValid = $this->LoginModel->connexion($form_log,$form_mdp);
		$lien = $this->config->base_url();
		if($isValid){
			if($form_log=="admin" && $form_mdp=="admin"){
				$query =  (array) $this->LoginModel->get_byLogin($form_log);
				$this->session->set_userdata('user1',$query);
				redirect($lien.'Back-office');
			}
			$query =  (array) $this->LoginModel->get_byLogin($form_log);
			$this->session->set_userdata('user1',$query);
			redirect( $lien.'Acceuil' );
		}
		else{
			$data = array();
			$data['error'] = "Login ou Mot de passe non valide";
			$this->load->view('login', $data);
		}
	}
}
