<?php
class HomeController extends CI_Controller
{
    public function index()
    {
        $this->load->model('HomeModel');
        $file = $this->HomeModel->mindex();

        $this->load->view('template/header');
        $this->load->view('template/content', $file);
        $this->load->view('template/footer');
    }
}

?>