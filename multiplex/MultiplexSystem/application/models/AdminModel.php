<?php
    class AdminModel extends CI_Model{
        public function minsert(){
            $name = $this->input->post('adminName');
            $address = $this->input->post('adminAddress');
            $zip = $this->input->post('adminZip');
            $email = $this->input->post('adminEmail');
            $pwd = $this->input->post('adminPwd');
            $img = $_FILES['adminImg']['name'];
            $mob = $this->input->post('adminMob');
            
            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('adminImg'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $ins = array(
                        "admin_name" => $name,
                        "admin_address" => $address,
                        "admin_zip" => $zip,
                        "admin_email" => $email,
                        "admin_password" => $pwd,
                        "admin_profileimg" => $img,
                        "admin_mobile" => $mob
                    );
                    $this->db->insert('admin', $ins);
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }

        //===============edit================
        public function medit($editId){
            $this->db->where('admin_id', $editId);
            return $this->db->get('admin')->row();
        }

        //================mupdate==============
        public function mupdate($upid){
            $name = $this->input->post('adminName');
            $address = $this->input->post('adminAddress');
            $zip = $this->input->post('adminZip');
            $email = $this->input->post('adminEmail');
            $pwd = $this->input->post('adminPwd');
            $img = $_FILES['adminImg']['name'];
            $mob = $this->input->post('adminMob');
            
            $config = array(
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // 2 MB
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
            $this->load->library('upload', $config);
        
            if ($img == !"") {
                if ($this->upload->do_upload('adminImg')) {
                    $data = array('upload_data' => $this->upload->data());
                    $upData = array(
                        "admin_name" => $name,
                        "admin_address" => $address,
                        "admin_zip" => $zip,
                        "admin_email" => $email,
                        "admin_password" => $pwd,
                        "admin_profileimg" => $img,
                        "admin_mobile" => $mob
                    );
                    $this->db->where('admin_id', $upid);
                    $this->db->update('admin', $upData);
                } 
                else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
            } 
            else {
                $upData = array(
                    "admin_name" => $name,
                    "admin_address" => $address,
                    "admin_zip" => $zip,
                    "admin_email" => $email,
                    "admin_password" => $pwd,
                    "admin_mobile" => $mob
                );
                $this->db->where('admin_id', $upid);
                $this->db->update('admin', $upData);
            }
        }


        //=============checked================
        public function checked()
        {
            $delete_id=$this->input->post('delete_id');
            $count=count($delete_id);
            for($i=0;$i<$count;$i++)
            {
                $this->db->where('admin_id', $delete_id[$i]);
                $this->db->delete('admin');
            }
        }
    }
?>