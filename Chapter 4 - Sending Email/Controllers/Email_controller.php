<?php
    class Email_controller extends CI_COntroller{
        function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
        }
        function index(){
            $this->load->helper('form');
            $this->load->view('email_form');
        }
        public function send_mail(){
            $this->load->library('email');
            $this->email->from('syedbilal07@hotmail.com', 'Syed Bilal');
            $this->email->to('syedbilal093@gmail.com');
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
            // Send Mail
            if($this->email->send()){
                $this->session->set_flashdata('email_sent', 'Email Sent Successfully');
            }
            else{
                $this->session->set_flashdata('email_sent', 'Error Sending Email');
                $this->load->view('email_form');
            }
        }
    }
?>
