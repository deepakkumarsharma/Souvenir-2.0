<?php
/**
* 
*/
class register_model extends CI_Model {
	function register_user() {
		$this->load->database();
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$this->db->insert('register', $data)
	}
}
?>