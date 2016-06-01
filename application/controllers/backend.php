<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	public function index(){
		$this->load->view('link');
		$this->load->view('v_login_admin');
	}
	
	public function dashboard(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_dashboard');
		$this->load->view('v_sidebar_foot');
	}
	
	public function product(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_master_product');
		$this->load->view('v_sidebar_foot');
	}
	
	public function administrator(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_master_administrator');
		$this->load->view('v_sidebar_foot');
	}
	
	public function login(){
		$uname = $this->input->post('admin_uname');
		$upass = $this->input->post('admin_password');
		
		if ($uname=="admin" && $upass=="admin"){
			$this->dashboard();
		}
		
	}
	
	public function logout(){
		redirect('../backend');
	}
}
?>