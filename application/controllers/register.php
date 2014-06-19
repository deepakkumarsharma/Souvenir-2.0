<?php

class register extends CI_Controller {
	public function index() {
		$this->load->helper('url');
		$this->load->view('Register/register.php');
		$this->load->view('Home/header.php');				
	}
}
?>