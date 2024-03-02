<?php
    class MovieDetailsConroller extends CI_Controller{
        public function getDetails($movie_id){
            $this->load->Model('MovieDetailsModel');
            $file['data'] = $this->MovieDetailsModel->mgetDetails($movie_id);

            $this->load->view('template/header');
            $this->load->view('moviedetails/moviedetailpage', $file);
            $this->load->view('template/footer');
        }
    }
?>