<?php

class Home extends CI_Controller {
	public function index() {
		$this->load->helper('url');
		$this->load->view('Home/home.php');
		$this->load->view('Home/header.php');				
	}
}
?>