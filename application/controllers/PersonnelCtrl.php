<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PersonnelCtrl extends CI_Controller {
	public function index() {		
		// On affiche notre page avec le template
		$this->load->helper('url');
		//$page = $this->load->view('web/Collection')
		$this->load->view('index');

	}
	public function delete() {
		
		$this->load->helper('url');
        $id = $_POST['id'];
        $this->load->model('PersonnelModel');
        $this->PersonnelModel->delete($id);
        $this->load->model('ActivitiesModel');
		$this->load->model('SlidersModel');
		$this->load->model('ActivitiesDetailsModel');	
		$data = array('activities' => $this->ActivitiesModel->get_All(),'details' => $this->ActivitiesDetailsModel->all() ,'personnel'=> $this->PersonnelModel->get_All(),'sliders'=> $this->SlidersModel->get_All());
        
        
		//$page = $this->load->view('web/Collection')
		$this->load->view('bo',$data);

	}
}
?>

