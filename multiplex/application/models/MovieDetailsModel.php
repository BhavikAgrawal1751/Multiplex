<?php
    class MovieDetailsModel extends CI_Model{
        public function mgetDetails($movie_id){
            $this->db->where('movie_id', $movie_id);
            return $this->db->get('movie')->result();
        }
    }
?>