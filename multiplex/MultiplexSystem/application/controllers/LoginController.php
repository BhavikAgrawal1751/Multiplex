<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		if($this->session->userdata('adminname')==""){
			$file['err'] = "";
			$this->load->view('loginpage', $file);
		}
		else{
			redirect('LoginController/adminPanel');
		}
	}

	public function adminPanel(){
		if($this->session->userdata('adminname') == ""){
			redirect('LoginController');
		}
		else{
			$this->load->view('Template/header');
			$this->load->view('Template/sidebar');
			$this->load->view('Template/dashboard');
		}
	}

	//==============chklogin================
	public function chklogin(){
		$this->LoginModel->mchklogin();
	}

	//===============logout===================
	public function logout(){
		$this->session->unset_userdata('adminname');
		redirect('LoginController');
	}
}
?>
