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
			if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');
   			$data['name'] =$email['id'];
		$this->load->view('Form/form.php');
		$this->load->view('Home/header.php',$data);
	}


	public function do_upload() {
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('Middlename', 'Middlename');
		$this->form_validation->set_rules('Lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('Fathername', 'Fathername', 'required');
		$this->form_validation->set_rules('Mothername', 'Mothername', 'required');
		$this->form_validation->set_rules('DOB', 'DOB', 'required');
		$this->form_validation->set_rules('Mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('Postalcode', 'Postalcode', 'required');
		$this->form_validation->set_rules('userfile', 'Image', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Branch', 'Branch', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Classronum', 'ClassRollNumber', 'required');
		$this->form_validation->set_rules('Unironum', 'UniversityRollNumber', 'required');
		$this->form_validation->set_rules('Comment', 'Comment', 'required');
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if ( ! $this->upload->do_upload() && $this->form_validation->run() == FALSE)
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Form/form', $error);
			$this->load->view('Home/header.php');
		}
		else
		{
		
			$data = $this->upload->data();
			$this->load->model('form_model');
			$this->load->view('Form/success', $data);
			$this->load->view('Home/header.php');	
			$this->form_model->form_fill($data['file_name']);
		}
	}	
}
?>