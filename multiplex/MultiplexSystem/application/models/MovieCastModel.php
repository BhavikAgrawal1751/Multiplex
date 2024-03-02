<?php
    class MovieCastModel extends CI_Model{
        public function minsert(){
            $moId = $this->input->post('moId');
            $castName = $this->input->post('castName');
            $castImg = $this->input->post('castImg');
            $castPos = $this->input->post('castPos');
            $castImg = $_FILES['castImg']['name'];
            
            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('castImg'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $ins = array(
                        "movie_id" => $moId,
                        "cast_name" => $castName,
                        "cast_img" => $castImg,
                        "cast_position" => $castImg,
                    );
                    $this->db->insert('moviecast', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }

        //==============medit==============
        //=============mupdate=============
        public function medit($editid){
            $this->db->where('cast_id', $editid);
            return $this->db->get('moviecast')->row();
        }

        public function movieTable($editid){
            return $this->db->get('movie')->result();
        }

        public function mupdate($upid){
            $moId = $this->input->post('moId');
            $castName = $this->input->post('castName');
            $castImg = $_FILES['castImg']['name'];
            $castPos = $this->input->post('castPos');
            
            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
            $this->load->library('upload', $config);
            if($castImg == !""){
                if($this->upload->do_upload('castImg'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $upData = array(
                        "movie_id" => $moId,
                        "cast_name" => $castName,
                        "cast_img" => $castImg,
                        "cast_position" => $castPos,
                    );
                    $this->db->where('cast_id', $upid);
                    $this->db->update('moviecast', $upData);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
            }
            else{
                $upData = array(
                    "movie_id" => $moId,
                    "cast_name" => $castName,
                    "cast_position" => $castPos,
                );
                $this->db->where('cast_id', $upid);
                $this->db->update('moviecast', $upData);
            }
        }
    }
?>