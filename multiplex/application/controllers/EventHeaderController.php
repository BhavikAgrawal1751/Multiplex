<?php
    class EventHeaderController extends CI_Controller{
        public function getEvent($eventcategory_id){
            $this->load->model('EventHeaderModel');
            $file['data'] = $this->EventHeaderModel->mgetEvent($eventcategory_id);
            // echo "<pre>";
            // print_r($file['data']);
    
            // die();
            
            $this->load->view('template/header');
            $this->load->view('moviegrid/action', $file);
            $this->load->view('template/footer');
        }
    }
?>