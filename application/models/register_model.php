<?php
/**
* 
*/
class Register_model extends CI_Model {

	public function Registermodel() {
		parent::CI_Model();
	}
	public function registeruser() {
		$this->load->database();
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('age')
			);
		$this->db->insert('register', $data);
	}
}
?>