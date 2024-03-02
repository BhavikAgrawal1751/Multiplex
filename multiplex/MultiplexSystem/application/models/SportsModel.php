<?php
    class SportsModel extends CI_Model{
        public function minsert(){
            $stateId = $this->input->post('stateId');
            $cityId = $this->input->post('cityId');
            $areaId = $this->input->post('areaId');
            $sprTitle = $this->input->post('sprTitle');
            $sprAddress = $this->input->post('sprAddress');
            $sprTrailer = $this->input->post('sprTrailer');
            $sprCategory = $this->input->post('sprCategory');
            $sprDetails = $this->input->post('sprDetails');
            $sprPrice = $this->input->post('sprPrice');
            $sprImages = $_FILES['sprImages']['name'];
            $sprDate = $this->input->post('sprDate');
            
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
                if($this->upload->do_upload('sprImages'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $ins = array(
                        "state_id" => $stateId,
                        "city_id" => $cityId,
                        "area_id" => $areaId,
                        "sports_title" => $sprTitle,
                        "sports_address" => $sprAddress,
                        "sports_trailer" => $sprTrailer,
                        "sports_category" => $sprCategory,
                        "sports_details" => $sprDetails,
                        "sportsticket_price" => $sprPrice,
                        "sports_images" => $sprImages,
                        "sports_date" => $sprDate
                    );
                    $this->db->insert('sports', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }

        //==============================
        public function mgetState($stateId){
            $this->db->where('state_id',$stateId);
            $data = $this->db->get('city')->result();
            foreach($data as $row) { ?>
            <option value="<?php echo $row->city_id ?>"> <?php echo $row->city_name ?></option>
            <?php }
        }

        public function mgetCity($cityId){
            $this->db->where('city_id', $cityId);
            $data = $this->db->get('area')->result();
            foreach($data as $row) { ?>
            <option value="<?php echo $row->area_id ?>"> <?php echo $row->area_name ?></option>
            <?php }
        }   

        //==================medit=================
        //================mupdate=================
        public function medit($editid){
            $this->db->where('sports_id', $editid);
            return $this->db->get('sports')->row();
        }

        public function stateTable($editid){
            return $this->db->get('state')->result();
        }

        public function cityTable($editid){
            return $this->db->get('city')->result();
        }

        public function areaTable($editid){
            return $this->db->get('area')->result();
        }

        public function mupdate($upid){
            $stateId = $this->input->post('stateId');
            $cityId = $this->input->post('cityId');
            $areaId = $this->input->post('areaId');
            $sprTitle = $this->input->post('sprTitle');
            $sprAddress = $this->input->post('sprAddress');
            $sprTrailer = $this->input->post('sprTrailer');
            $sprCategory = $this->input->post('sprCategory');
            $sprDetails = $this->input->post('sprDetails');
            $sprPrice = $this->input->post('sprPrice');
            $sprImages = $_FILES['sprImages']['name'];
            $sprDate = $this->input->post('sprDate');
            
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
            
            if($sprImages == !""){
                if($this->upload->do_upload('sprImages'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $upData = array(
                        "state_id" => $stateId,
                        "city_id" => $cityId,
                        "area_id" => $areaId,
                        "sports_title" => $sprTitle,
                        "sports_address" => $sprAddress,
                        "sports_trailer" => $sprTrailer,
                        "sports_category" => $sprCategory,
                        "sports_details" => $sprDetails,
                        "sportsticket_price" => $sprPrice,
                        "sports_images" => $sprImages,
                        "sports_date" => $sprDate
                    );
                    $this->db->where('sports_id', $upid);
                    $this->db->update('sports', $upData);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
            }
            else{
                $upData = array(
                    "state_id" => $stateId,
                    "city_id" => $cityId,
                    "area_id" => $areaId,
                    "sports_title" => $sprTitle,
                    "sports_address" => $sprAddress,
                    "sports_trailer" => $sprTrailer,
                    "sports_category" => $sprCategory,
                    "sports_details" => $sprDetails,
                    "sportsticket_price" => $sprPrice,
                    "sports_date" => $sprDate
                );
                $this->db->where('sports_id', $upid);
                $this->db->update('sports', $upData);
            }
        }
    }
?>