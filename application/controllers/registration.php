<?php

class Registration extends CI_Controller {

	public function index() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('string');
		$string = random_string('alnum',20);
		$this->form_validation->set_rules('Name', 'Username', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required|sha1');
		$this->form_validation->set_rules('Passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->load->helper('url');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Register/registration.php');
			$this->load->view('Home/header.php');
		} else {
			$this->load->view('Register/success.php');
			$this->load->view('Home/header.php');
			$this->load->model('register_model');
			$this->register_model->register_user($string);

			$this->load->model('email_model');
			$this->email_model->sendVerificatinEmail($this->input->post('Email'), $string);

			$this->load->model('activestatus_model');
			$this->activestatus_model->verifyEmailAddress('Y');
	}


}
}	
?>
