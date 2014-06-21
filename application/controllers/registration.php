<?php

class Registration extends CI_Controller {
	public function index() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->load->helper('url');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Register/registration.php');
			$this->load->view('Home/header.php');
		} else {
			$this->load->view('Register/success.php');
			$this->load->view('Home/header.php');
			$this->load->model('register_model');
			$this->register_model->register_user();

		}
	}	
}
?>