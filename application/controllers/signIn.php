<?php

class SignIn extends CI_Controller {
	
	public function index() {
		if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');
   		$data['name'] =$email['id'];	
		$this->load->library('form_validation');
		$this->load->view('Sign-in/sign-in.php');
		$this->load->view('Home/header.php', $data);					
	}

	public function verify() {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
   		$this->form_validation->set_rules('email', 'email', 'required|callback_checkk');
   		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

   		if($this->form_validation->run() == FALSE) {
   			if($this->session->all_userdata()) 
   			$email=$this->session->userdata('username');
   			$data['name'] =$email['id'];
			$this->load->view('Sign-in/sign-in.php');
			$this->load->view('Home/header.php', $data);				
   			return false;
   		} else {
   			$this->session->set_userdata('username', array('id'=>$this->input->post('email')));
			redirect('form/','refresh');   			
			return true;
   		}		
	}
// Callback function of email. Function - Verify(). This will check email and password, if any error it 
// display message 
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

	 public function home() {
   		if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');

   		$data['name'] =$email['id'];
		$this->load->view('Form/form.php',$data);
		$this->load->view('Home/header.php');				
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('signIn','refresh');
	}
}
?>