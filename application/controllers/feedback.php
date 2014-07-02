<?php

class Feedback extends CI_Controller {
    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Username','Username','required');
        $this->form_validation->set_rules('Email','Email','required');
        $this->form_validation->set_rules('Comment','Comment','required');
        $this->load->helper('url');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('feedback/feedback.php');
            $this->load->view('Home/header.php');
        }
        else
        {   $this->load->view('Home/header.php');
            $this->load->view('feedback/success.php');
            $this->load->model('feedback_model');
            $this->feedback_model->feedback_user();
            $this->load->model('email_model');
            $this->email_model->sendFeedbackEmail($this->input->post('Email'));
        }
    }
}
?>





