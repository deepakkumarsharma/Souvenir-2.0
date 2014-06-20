<?php

class register extends CI_Controller {
	public function index() {
		$this->load->model('register_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->load->helper('url');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Register/register.php');
				$this->load->view('Home/header.php');
			} else { 		
				$this->register_model->register_user();
				$this->load->view('Register/register_done.php');
				$this->load->view('Home/header.php');
			}			
	}
}
?>