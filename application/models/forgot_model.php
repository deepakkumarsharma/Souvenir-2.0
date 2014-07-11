<?php
class Forgot_model extends CI_Model {
    public function check($email) {
                $this->load->database();
                $query=$this->db->query("select email_verification_code from register where email='".$email."'");
                if($query->num_rows()>0) {
                       $row=$query->row_array();
                       return $row['email_verification_code'];
                }
                else {
                       return false;
                }

}
     public function sendForgotPasswordEmail($email,$code) {
         $config = Array(
             'protocol' => 'smtp',
             'smtp_host' => 'ssl://smtp.gmail.com.',
             'smtp_port' => 465,
             'smtp_user' => '', // change it to yours
             'smtp_pass' => '', // change it to yours
             'mailtype' => 'html',
             'charset' => 'iso-8859-1',
             'wordwrap' => TRUE
         );
  
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");
         $this->email->from('', "iH8sum3r");
         $this->email->to($email);
         $this->email->subject("Yaadein Forgot password Verification");
         $this->email->message("<a href=".base_url()."/index.php/forgotPassword/passwordreset/".$code."\">Click here</a> to recover your password");
         $this->email->send(); 
     }
     public function update($code,$pass) { 
        $this->load->database();
        $this->db->query("update register set password='".$pass."' where email_verification_code='".$code."'");
     } 

}	
?>
