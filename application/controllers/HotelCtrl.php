<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 06/05/2019
 * Time: 15:34
 */
class HotelCtrl extends CI_Controller
{
	public function index() {
		//      $data = array('nom' => 'Robert');

		// On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

		// On affiche notre page avec le template
		$this->load->helper('url');
		//$page = $this->load->view('web/Collection')

		$this->load->view('hotel');

	}
	public function afficherContenu(){
		$this->load->helper('url');
		$this->load->model('ActivitiesDetailsModel');
		$this->load->model('SlidersModel');
		$id = $this->input->GET('id');

		$data = array('contenu' => $this->ActivitiesDetailsModel->get_All_by_id($id), 'sliders'=> $this->SlidersModel->get_All() );
		$this->load->view('hotel',$data);
	}
}
