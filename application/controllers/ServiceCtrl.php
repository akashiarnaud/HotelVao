<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 16:15
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class ServiceCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function index() {
		$this->load->model('ServiceModel');
		$this->load->helper('url');
		$this->load->view('index.php');
	}
	public function modifier()
	{
		$this->load->model('ServiceModel');
		$this->load->helper('url');
		$service1 = $this->input->post("service1");
		$serviceD1 = $this->input->post("serviceD1");
		$id = $this->input->post("id");
		$this->ServiceModel->update($id, $service1,$serviceD1);
		$this->load->library('Layout');
		echo $service1;
		echo $serviceD1;
		//   $this->load->view('web/index');
	}

}
