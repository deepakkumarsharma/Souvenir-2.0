<?php

class forgotPassword extends CI_Controller {
    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Email','Email','required');
        $this->load->helper('url');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Sign-in/forgot/forgot.php');
            $this->load->view('Home/header.php');
        } else { 
            $this->load->model('forgot_model');
            $code = $this->forgot_model->check($this->input->post('Email'));
            if($code) {
                $this->forgot_model->sendForgotPasswordEmail($this->input->post('Email'),$code);
                $this->load->view('Home/header.php');
                $this->load->view('Sign-in/forgot/success.php');
            } else {
                $this->load->view('Home/header.php');
                $this->load->view('Sign-in/forgot/failure.php');            
            }
        }
    }
    
    public function passwordreset($code) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Password','Password','required');
        $this->load->helper('url');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Sign-in/forgot/reset');
            $this->load->view('Home/header.php');
        } else {
            $this->load->view('Home/header.php');
            $this->load->model('forgot_model');
            $this->forgot_model->update($code,sha1($this->input->post('Password')));
            $this->load->view('Sign-in/forgot/passChanged');
        }
    }
    public function passChanged() {
        $this->load->view('Home/header.php');
        $this->load->view('Sign-in/forgot/passChanged');
    }
}
?>


