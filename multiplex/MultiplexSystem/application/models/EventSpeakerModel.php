<?php
    class EventSpeakerModel extends CI_Model{
        public function minsert(){
            $evCatId = $this->input->post('evCatId');
            $evSpeakName = $this->input->post('evSpeakName');
            $evSpeakPro = $this->input->post('evSpeakPro');
            $img = $_FILES['evSpeakImg']['name'];
                
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
                if($this->upload->do_upload('evSpeakImg'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $ins = array(
                        "eventcategory_id" => $evCatId,
                        "eventspeaker_name" => $evSpeakName,
                        "eventspeaker_profession" => $evSpeakPro,
                        "eventspeaker_profileimg" => $img
                    );
                    $this->db->insert('eventspeaker', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }

        //==============medit================
        //===================================
        public function eventcategoryTable(){
            return $this->db->get('eventcategory')->result();
        }

        public function medit($editid){
            $this->db->where('eventspeaker_id', $editid);
            return $this->db->get('eventspeaker')->row();
        }

        public function mupdate($upid){
            $evCatId = $this->input->post('evCatId');
            $evSpeakName = $this->input->post('evSpeakName');
            $evSpeakPro = $this->input->post('evSpeakPro');
            $img = $_FILES['evSpeakImg']['name'];

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
            if($img == !""){
                if($this->upload->do_upload('evSpeakImg'))
                {
                    $upData = array(
                        "eventcategory_id" => $evCatId,
                        "eventspeaker_name" => $evSpeakName,
                        "eventspeaker_profession" => $evSpeakPro,
                        "eventspeaker_profileimg" => $img
                    );
                    $this->db->where('eventspeaker_id', $upid);
                    $this->db->update('eventspeaker', $upData);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
            }
            else{
                $upData = array(
                    "eventcategory_id" => $evCatId,
                    "eventspeaker_name" => $evSpeakName,
                    "eventspeaker_profession" => $evSpeakPro,
                );
                $this->db->where('eventspeaker_id', $upid);
                $this->db->update('eventspeaker', $upData);
            }
        }
    }
?>