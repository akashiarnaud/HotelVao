<?php
/**
 * Created by IntelliJ IDEA.
 * User: Toky
 * Date: 08/10/2018
 * Time: 16:15
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class TeamCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function index() {
		$this->load->model('TeamModel');
		$this->load->helper('url');
		$this->load->view('index.php');
	}
	public function modifier()
	{
		$this->load->model('TeamModel');
		$this->load->helper('url');
		$team1 = $this->input->post("team1");
		$teamD1 = $this->input->post("teamD1");
		$id = $this->input->post("id");
		$this->TeamModel->update($id, $team1,$teamD1);
		$this->load->library('Layout');
		echo $team1;
		echo $teamD1;
		//   $this->load->view('web/index');
	}

}
