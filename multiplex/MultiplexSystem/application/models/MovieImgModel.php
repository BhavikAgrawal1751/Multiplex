<?php
    class MovieImgModel extends CI_Model{
        public function minsert(){
            $moId = $this->input->post('moId');
            $moImg = $_FILES['moImg']['name'];

            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000",
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('moImg'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    
                    $ins = array(
                        "movie_id" => $moId,
                        "movieimg" => $moImg
                    );
                    $this->db->insert('movieimg', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
            
        }

        //===============medit==================
        //======================================
        public function medit($editid){
            $this->db->where('movieimg_id', $editid);
            return $this->db->get('movieimg')->row();
        }

        public function movieTable($editid){
            return $this->db->get('movie')->result();
        }

        public function mupdate($upid){
            $moId = $this->input->post('moId');
            $moImg = $_FILES['moImg']['name'];
        
            $config = array(
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000", // 2 MB
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
            $this->load->library('upload', $config);
        
            if ($moImg == !"") {
                // Image is provided, attempt to update it
                if ($this->upload->do_upload('moImg')) {
                    $data = array('upload_data' => $this->upload->data());

                    $upData = array(
                        "movie_id" => $moId,
                        "movieimg" => $moImg
                    );
                    $this->db->where('movieimg_id', $upid)->update('movieimg', $upData);
                } 
                else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
            } 
            else {
                // Image is not provided, update only the movie name
                $upData = array(
                    "movie_id" => $moId
                );
                $this->db->where('movieimg_id', $upid)->update('movieimg', $upData);
            }
        }
        
        
    }
?>