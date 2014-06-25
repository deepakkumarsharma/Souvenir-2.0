<?php

class SignIn extends CI_Controller {
	public function index() {
		$this->load->helper('url');
		$this->load->view('Sign-in/sign-in.php');
		$this->load->view('Home/header.php');				
	}
}
?>