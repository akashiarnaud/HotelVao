<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 16:15
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MenuCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function index() {
		$this->load->model('MenuModel');
		$this->load->helper('url');
		$this->load->view('index.php');
	}
	public function modifier()
	{
		$this->load->model('MenuModel');
		$this->load->helper('url');
		$menu1 = $this->input->post("menu1");
		$id = $this->input->post("id");
		$this->MenuModel->update($id, $menu1);
		$this->load->library('Layout');
		echo $menu1;
		//   $this->load->view('web/index');
	}
}
