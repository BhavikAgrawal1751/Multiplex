<?php
    class FoodBeverageBookingModel extends CI_Model{
        public function minsert(){
            $fbname = $this->input->post('fbname');
            $fbprice = $this->input->post('fbprice');
            $fbimg = $_FILES['fbimg']['name'];
                
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
                if($this->upload->do_upload('fbimg'))
                {
                        $data = array('upload_data' => $this->upload->data());
                        
                        $ins = array(
                            "foodbeverage_name" => $fbname,
                            "foodbeverage_price" => $fbprice,
                            "foodbeverage_image" => $fbimg,
                        );
                        $this->db->insert('foodbeveragebooking', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }
    }
?>