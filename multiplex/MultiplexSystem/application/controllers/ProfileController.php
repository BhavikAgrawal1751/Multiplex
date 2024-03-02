<?php
    class ProfileController extends CI_Controller{
        //=============profile================
        public function index(){
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('profilepage');
        }
    }
?>  