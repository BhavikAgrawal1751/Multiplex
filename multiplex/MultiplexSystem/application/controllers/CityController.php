<?php
    class CityController extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('adminname')==""){
                redirect('LoginController');	
            }
            // $this->load->model('CityModel');
        }

        public function index()
        {
            $this->db->from('city');
            $this->db->join('state','state.state_id = city.state_id');

            $file['data'] = $this->db->get()->result();
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('City/showCity', $file);
        }

        //---------------status-----------------
        public function status($id){
            $this->db->where('city_id', $id);
            $data = $this->db->get('city')->row();
            if($data->city_status == "Unblocked")
            {
                $up = array(
                    "city_status" => "Blocked"
                );
            }
            else{
                $up = array(
                    "city_status" => "Unblocked"
                );
            }
            $this->db->where('city_id', $id);
            $this->db->update('city', $up);
            $this->index();
        }

        //---------------delete----------------
        public function delete($delid){
            $this->db->where('city_id',$delid);
            $this->db->delete('city');
            $this->index();
        }

        //------------------add------------------
        public function addForm(){
            $file['stateData'] = $this->db->get('state')->result();
            
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('City/addCity', $file);
        }

        public function cinsert(){
            $this->load->model('CityModel');
            $this->CityModel->minsert();
            $this->index();
        }

        //============cedit===============
        public function cedit($editId){
            $this->load->model('CityModel');
            $file['editData'] = $this->CityModel->medit($editId);
            $file['stateData'] = $this->CityModel->stateTable($editId);
            $this->load->view('Template/header');
            $this->load->view('Template/sidebar');
            $this->load->view('City/updateCity', $file);
        }

        //============cupdate===============
        public function cupdate($upid){
            $this->load->model('CityModel');
            $this->CityModel->mupdate($upid);
            redirect('CityController/');
        }
    }
?>