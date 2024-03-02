<?php
    class HomeModel extends CI_Model{
        public function mindex(){
            $data['movies'] = $this->db->get('movie')->result();
            $data['events'] = $this->db->get('event')->result();
            $data['sports'] = $this->db->get('sports')->result();
            return $data;
        }
    }
?>