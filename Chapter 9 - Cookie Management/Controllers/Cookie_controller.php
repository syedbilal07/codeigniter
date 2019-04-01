<?php
    class Cookie_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('cookie', 'url'));
        }
        public function index()
        {
            set_cookie('cookie_name', 'cookie_value', '3600');
            $this->load->view('Cookie_view');
        }
        public function display_cookie()
        {
            echo get_cookie('cookie_name');
            $this->load->view('Cookie_view');
        }
        public function deletecookie()
        {
            delete_cookie('cookie_name');
            redirect('cookie/display');
        }
    }
?>