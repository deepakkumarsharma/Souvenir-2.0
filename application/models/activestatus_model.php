<?php
class Activestatus_model extends CI_Model {

	public function verifyEmailAddress($verificationcode){		
		$sql = "update register set active_status='Y' WHERE email_verification_code=?";
		$this->db->query($sql, array($verificationcode));
		return $this->db->affected_rows();	
	}
	
}
?>