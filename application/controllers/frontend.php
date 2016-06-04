<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

/*MICHAEL PAKE*/

	public function index(){
		$this->load->view('v_home');
	}
	
	public function home(){
		$this->load->view('link');
		$this->load->view("v_head_home");
		$this->load->view('v_front_home');
	}

	public function jelajahiProduct(){
		$this->load->view('link');
		$this->load->view('v_front_jelajahi_produk');
	}

	public function searchGeneral(){
		$this->load->view('link');
		$this->load->view('v_front_search_general');
	}

	public function hasilSearchGeneral(){
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_general');	
	}
	public function hasilSearchGeneral_nf(){
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_general_nf');	
	}

	public function hasilSearchProduct(){
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_product');	
	}
	public function hasilSearchProduct_nf(){
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_product_nf');	
	}

	public function karir(){
		$this->load->view('link');
		$this->load->view("v_head_karir");
		$this->load->view('v_front_karir');
	}

	public function contact(){
		$this->load->view('link');
		$this->load->view("v_head_kontak");
		$this->load->view('v_front_contact');
	}

	public function menjadiReseller(){
		$this->load->view('link');
		$this->load->view("v_head_reseller");
		$this->load->view('v_front_reseller');
	}

	public function temukanWakasa(){
		$this->load->view('link');
		$this->load->view("v_front_temukan_wakasa");
	}

	public function afterLogin(){
		$this->load->view('link');
		$this->load->view("v_front_after_login");	
	}

/*GAK TAU DI PAKE ATO NDAK */

	
	public function footer(){
		$this->load->view('link');
		$this->load->view('v_footer');
	}
	public function HasilProduk()
	{
		$this->load->view("TestBanner");
	}
	public function HasilSearchGeneral1()
	{
		$this->load->view("v_HasilSearchGeneral");
	}
	public function jelajahiProduk()
	{
		$this->load->view("v_head_jelajahiProduk");
	}
	public function kontak()
	{
		$this->load->view("v_head_kontak");
	}
	public function reseller()
	{
		$this->load->view("v_head_reseller");
	}
	public function tentangKami()
	{
		$this->load->view("v_head_tentangKami");
	}
}
?>