<?php
/**
* 
*/
class Register_model extends CI_Model {
	public function register_user() {
		$this->load->database();
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('password')
			);
		$this->db->insert('register', $data);
	}
}
?>