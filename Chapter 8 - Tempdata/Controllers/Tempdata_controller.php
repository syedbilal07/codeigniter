<?php
    class Tempdata_controller extends CI_Controller{
        public function index(){
            $this->load->library('session');
            $this->load->view('tempdata_view');
        }
        public function add(){
            $this->load->library('session');
            $this->load->helper('url');
            //tempdata will be removed after 5 seconds
            $this->session->set_tempdata('item','item-value', 5);
            redirect('tempdata');
            // destroying session
            $this->session->sess_destroy();
        }
    }
?>