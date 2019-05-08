<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BackOfficeCtrl extends CI_Controller {
	public function index() {
		//      $data = array('nom' => 'Robert');

		// On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

		// On affiche notre page avec le template
		$this->load->helper('url');

		$this->load->view('bo');

	}
	public function toBo(){
		$this->load->helper('url');
		$this->load->model('ActivitiesModel');
		$this->load->model('PersonnelModel');
		$this->load->model('SlidersModel');
		$this->load->model('ActivitiesDetailsModel');	
		$data = array('activities' => $this->ActivitiesModel->get_All(),'details' => $this->ActivitiesDetailsModel->all() ,'personnel'=> $this->PersonnelModel->get_All(),'sliders'=> $this->SlidersModel->get_All());
		$this->load->view('bo',$data);
	}

}
?>
