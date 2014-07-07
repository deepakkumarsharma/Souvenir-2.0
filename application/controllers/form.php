<?php
/**
* 
*/
class Form extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$this->load->view('Form/form.php');
		$this->load->view('Home/header.php');
	}


	public function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('Form/form', $error);
			$this->load->view('Home/header.php');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('Form/success', $data);
			$this->load->view('Home/header.php');
		}
	}	
}
?>