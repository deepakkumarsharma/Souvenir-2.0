<?php

class Registration extends CI_Controller {

	public function index() {

					if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');
   			$data['name'] =$email['id'];
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
			$this->load->view('Home/header.php',$data);
		} else {
			$this->load->view('Register/success.php');
			$this->load->view('Home/header.php',  $data);
			$this->load->model('register_model');
			$this->register_model->register_user($string);

			$this->load->model('email_model');
			$this->email_model->sendVerificatinEmail($this->input->post('Email'), $string);
		}
	}

	public function verifyEmailAddress($verificationText) {
		$sql = "update register set active_status='Y' WHERE email_verification_code=?";
		$this->db->query($sql, array($verificationText));
		redirect('signIn', 'refresh');
		return $this->db->affected_rows();
	}
}	
?>
