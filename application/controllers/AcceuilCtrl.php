<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AcceuilCtrl extends CI_Controller {
	public function index() {
		//      $data = array('nom' => 'Robert');

		// On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

		// On affiche notre page avec le template
		$this->load->helper('url');
		//$page = $this->load->view('web/Collection')
		$this->load->view('index');

	}
	public function toAcceuil() {
		//      $data = array('nom' => 'Robert');

		// On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

		// On affiche notre page avec le template
		$this->load->helper('url');
		$this->load->model('ActivitiesModel');
		$this->load->model('PersonnelModel');
		$this->load->model('SlidersModel');
		$data = array('activities' => $this->ActivitiesModel->get_All(),'personnel'=> $this->PersonnelModel->get_All(),'sliders'=> $this->SlidersModel->get_All());
		//$page = $this->load->view('web/Collection')
		$this->load->view('acceuil',$data);

	}
}
?>

