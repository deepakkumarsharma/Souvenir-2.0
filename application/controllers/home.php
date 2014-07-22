<?php

class Home extends CI_Controller {
	public function index() {
		if($this->session->all_userdata()) 
   		$email=$this->session->userdata('username');
   		$data['name'] =$email['id'];		
		$this->load->view('Home/home.php');	
   		$this->load->view('Home/header.php', $data);					
	}
}
?>