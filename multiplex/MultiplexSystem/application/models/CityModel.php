<?php
    class CityModel extends CI_Model{
        public function minsert(){
            $id = $this->input->post('stateId');
            $name = $this->input->post('cityName');
            $ins = array(
                "state_id" => $id,
                "city_name" => $name,
            );
            $this->db->insert('city', $ins);
        }

        //=============edit=================
        public function medit($editId){
            $this->db->where('city_id', $editId);
            return $this->db->get('city')->row();
        }

        public function stateTable($editId){
            return $this->db->get('state')->result();
        }

        //================mupdate==============
        public function mupdate($upid){
            $id = $this->input->post('stateId');
            $name = $this->input->post('cityName');

            $upData = array(
                "state_id" => $id,
                "city_name" => $name,
            );

            $this->db->where('city_id', $upid);
            $this->db->update('city', $upData);
        }
    }
?>