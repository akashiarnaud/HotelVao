<?php
class EmailController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ini_set('date.timezone', 'America/New_York');

	}
	function index() {
		$this->load->model('');
		$this->load->helper('url');
		$id = $this->input->post("id");
		$this->load->view('web/index.php');
	}


	public function send(){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'nytokymahery@gmail.com',
			'smtp_pass' => 'maherylepro',
			'mailtype'  => 'text',
			'charset'   => 'iso-8859-1'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		if( ! ini_get('date.timezone') )
		{
			date_default_timezone_set('GMT');
		}
		$this->load->helper('url');

		$sujet = $this->input->post("sujet");
		$email = $this->input->post("E-Mail");
		$message = $this->input->post("message");
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$this->email->from($from, 'USer');
		$this->email->to($to);

		$this->email->subject($sujet);
		$this->email->message($message);
		if($this->email->send()){

			//Success email Sent
			echo $this->email->print_debugger();
		}else{

			//Email Failed To Send
			echo $this->email->print_debugger();
		}
		//   $this->load->view('web/index');
	}
}

?>
