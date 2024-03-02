<?php
    class LoginModel extends CI_Model{
        public function mchklogin(){
            $email = $this->input->post('txtemail');
		    $pwd = $this->input->post('txtpwd');
            
		    $this->db->where('admin_email',$email);
		    $this->db->where('admin_password',$pwd);
		    $data = $this->db->get('admin')->result();
            
		    $this->db->where('admin_email',$email);
		    $this->db->where('admin_password',$pwd);
		    $data2 = $this->db->get('admin')->row();

			if(count($data) > 0){
				$this->session->set_userdata('adminname', $data2->admin_name);
				$this->session->set_userdata('adminimage', $data2->admin_profileimg);
				redirect('LoginController/adminPanel/');	
			}
			else{
				$file['err'] = "Invalid Email or Password";
				$this->load->view('loginpage', $file);
			}
        }
    }
?>
