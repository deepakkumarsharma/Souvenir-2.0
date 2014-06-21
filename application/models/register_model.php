<?php
/**
* 
*/
class Register_model extends CI_Model {
	public function register_user() {
		$this->load->database();
		$id = $this->input->post('id');
		$name = $this->input->post('Name');
		$email = $this->input->post('Email');
		$password = $this->input->post('Password');
		$data = array(
			'name' => $this->input->post('Name'),
			'password' => $this->input->post('Password')
			);
		$this->db->insert('register', $data);
	}
}
?>