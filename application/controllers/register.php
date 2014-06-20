<?php

class register extends CI_Controller {
	public function index() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', '');
		$this->load->helper('url');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('Register/register.php');
		$this->load->view('Home/header.php');
		} else { 
			$this->Register_model->register_user();
			$this->load->view('Register/register_done.php');
			$this->load->view('Home/header.php');
		}			
	}
}
?>