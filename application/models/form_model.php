<?php
/**
* 
*/
class Form_model extends CI_Model {
	public function form_fill($file) {
		$this->load->database();
		$id = $this->input->post('id');
		$firstname = $this->input->post('Firstname');
		$middlename = $this->input->post('Middlename');
		$lastname = $this->input->post('Lastname');
		$fathername = $this->input->post('Fathername');
		$mothername = $this->input->post('Mothername');
		$dob = $this->input->post('DOB');
		$mobile = $this->input->post('Mobile');
		$postalcode = $this->input->post('Postalcode');
		$address = $this->input->post('Address');
		$photo = $this->input->post('userfile');
		$branch = $this->input->post('Branch');
		$email = $this->input->post('Email'); 
		$classrollno = $this->input->post('Classronum');
		$universityrollno = $this->input->post('Unironum');
		$comment = $this->input->post('Comment');    		

		$data = array(
			'firstname' => $this->input->post('Firstname'),
			'middlename' => $this->input->post('Middlename'),
			'lastname' => $this->input->post('Lastname'),
			'fathername' => $this->input->post('Fathername'),
			'mothername' => $this->input->post('Mothername'),
			'dob' => $this->input->post('DOB'),
			'mobile' => $this->input->post('Mobile'),
			'postalcode' => $this->input->post('Postalcode'),
			'address' => $this->input->post('Address'),
			'photo' => $file,
			'branch' => $this->input->post('Branch'),
			'email' => $this->input->post('Email'),
			'classrollno' => $this->input->post('Classronum'),
			'universityrollno' => $this->input->post('Unironum'),
			'comment' => $this->input->post('Comment')
			);
		$this->db->insert('student', $data);
	}
}
?>	