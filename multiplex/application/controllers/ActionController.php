<?php
class ActionController extends CI_Controller
{
    public function getMovie($category_id){
        $this->load->model('ActionModel');
        $file['data'] = $this->ActionModel->mgetMovie($category_id);
        // echo "<pre>";
        // print_r($file['data']);

        // die();
        
        $this->load->view('template/header');
        $this->load->view('moviegrid/action', $file);
        $this->load->view('template/footer');
    }

    public function getIndustry($industry_id){
        $this->load->model('ActionModel');
        $file['data'] = $this->ActionModel->mgetIndustry($industry_id);
        
        $this->load->view('template/header');
        $this->load->view('moviegrid/action', $file);
        $this->load->view('template/footer');
    }
}
?>