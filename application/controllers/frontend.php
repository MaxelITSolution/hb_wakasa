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
	
	public function karir(){
		$this->load->view("v_head_karir");
		$this->load->view('link');
		$this->load->view('v_front_karir');
	}
	public function footer(){
		$this->load->view('link');
		$this->load->view('v_footer');
	}
	public function HasilProduk()
	{
		$this->load->view("TestBanner");
	}
	public function HasilSearchGeneral()
	{
		$this->load->view("v_HasilSearchGeneral");
	}
	public function jelajahiProduk()
	{
		$this->load->view("v_jelajahiProduk");
	}
	public function kontak()
	{
		$this->load->view("v_head_kontak");
	}
	public function reseller()
	{
		$this->load->view("v_head_reseller");
	}
	public function temukanWakasa()
	{
		$this->load->view("v_head_temukanWakasa");
	}
}
?>