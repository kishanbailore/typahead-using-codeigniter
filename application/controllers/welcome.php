<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('welcome_model','home');
    }
	public function index()
	{
		$this->get_type();
		$this->load->view('welcome_message');
	}
	public function get_type()
	{
			$this->load->model('welcome_model');
			$data  = $this->welcome_model->cust1();
			echo "<script>var cust=";
			echo json_encode($data);
			echo ";</script>";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */