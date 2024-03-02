<?php
    class ContactController extends CI_controller{
        public function index(){
            $this->load->view('template/header');
            $this->load->view('contact/contactpage');
            $this->load->view('template/footer');
        }
    }
?>