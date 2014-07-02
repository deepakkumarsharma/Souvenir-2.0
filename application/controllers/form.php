<?php
/**
* 
*/
class Form extends CI_Controller {
	public function index() {
		$this->load->view('Form/form.php');
		$this->load->view('Home/header.php');
	}
}
?>