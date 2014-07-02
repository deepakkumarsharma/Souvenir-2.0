<?php

class Home extends CI_Controller {
	public function index() {
		$this->load->view('Sign-in/forgotPassword.php');
		$this->load->view('Home/header.php');				
	}
}
?>