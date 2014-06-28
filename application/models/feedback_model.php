<?php
/**
* 
*/
class Feedback_model extends CI_Model {
        public function feedback_user() {

                $this->load->database();

                $data = array(
                        'name' => $this->input->post('Username'),
                        'email' => $this->input->post('Email'),
                        'comment' =>  $this->input->post('Comment')
                        );
                $this->db->insert('feedback', $data);
        }
}
?>
~                              

