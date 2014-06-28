<?php
class sign_model extends CI_Model {
	public function login($email, $password) {
		$this->load->database();
		$query=$this->db->query("select * from register where email='".$email."'");
			
			if($query->num_rows()>0) {
				$row=$query->row_array();
			if($password==$row['password']) {
				return true;	
			} else {
				return false;
			}
		}
	}
}	
?>