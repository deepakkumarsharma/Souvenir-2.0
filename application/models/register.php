<?php
/**
* 
*/
class Register_model extends CI_Model {
	
	function register_user()
	{
		$data['name'] = $this->input->post('Name');
		$data['email'] = $this->input->post('Email');
		$data['password'] = $this->input->post('Password');
		$this->db->insert('register', $data)
	}
}
?>