<?php
class Email_model extends CI_Model {

	public function sendVerificatinEmail($email, $verificationText) {
		
		$config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.gmail.com.',
			  'smtp_port' => 465,
			  'smtp_user' => 'deeky.sharma@gmail.com', // change it to yours
			  'smtp_pass' => '@@DEE123p@k', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
		);
			
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('deeky.sharma@gmail.com', "iH8sum3r");
		$this->email->to($email);		
		$this->email->subject("Yaadein Email Verification");
		$this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost/~deepak/Souvenir-2.0/index.php/registration/verifyEmailAddress/".$verificationText."\n"."\n\nThanks\nDeePak");

		$this->email->send();
		
	}
}
?>