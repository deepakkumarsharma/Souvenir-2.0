<?php

class SignIn extends CI_Controller {
	public function index() {
		$this->load->library('form_validation');
		$this->load->view('Sign-in/sign-in.php');
		$this->load->view('Home/header.php');				
	}

	public function verify() {
		$this->load->library('form_validation');
   		$this->form_validation->set_rules('email', 'email', 'required|callback_checkk');
   		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

   		if($this->form_validation->run() == FALSE) {
			$this->load->view('Sign-in/sign-in.php');
			$this->load->view('Home/header.php');				
   			return false;
   		} else {
			$this->load->view('Form/form.php');
			$this->load->view('Form/header.php');				
			return true;
   		}		
	}

	public function checkk() {
		$this->load->model('sign_model');
		$result=$this->sign_model->login($this->input->post('email'),sha1($this->input->post('password')));
		if($result) {
			return true;
		} else {
			$this->form_validation->set_message('checkk','Invalid username or password');
			return false;
		}
	}
}
?>