<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function index(){
		$this->load->view('v_home');
	}
	
	public function home(){
		$this->load->view('v_home');
	}
	
	public function searchGeneral(){
		$this->load->view('v_search_general');
	}
	
	public function searchProduct(){
		$this->load->view('v_search_product');
	}
}
?>