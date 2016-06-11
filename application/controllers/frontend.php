<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

/*MICHAEL PAKE*/
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(Array("url"));
		$this->load->model("M_frontend");
	}
	
	public function set_lang_eng(){
		$this->session->set_userdata('user_lang', 'eng');
		echo "<script>window.location.href='javascript:history.back(-2);'</script>";
	}
	public function set_lang_ina(){
		$this->session->set_userdata('user_lang', 'ina');
		echo "<script>window.location.href='javascript:history.back(-2);'</script>";
	}
	public function set_reg_no(){
		$this->session->set_userdata('user_register', 'no');
		echo "<script>window.location.href='javascript:history.back(-2);'</script>";
	}

	public function cek_session(){
		$lang_now = $this->session->userdata('user_lang');
		if ($lang_now!="ina" || $lang_now!="eng"){
			$this->M_frontend->set_session();
		}
	}
	
	public function index(){
		$this->load->database();
		$this->load->view('link');
		$this->load->model('M_frontend');
		$this->cek_session();
		$lang_now = $this->session->userdata('user_lang');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('v_front_home', $data);	
		redirect('../home');
	}
	
	public function home(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_home', $data);
	}

	public function jelajahiProduct(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_jelajahi_produk', $data);
		/*$data["produk"] = $this->M_frontend->getData("product",null);
		$linkIND = "";
		$linkENG = "";
		$data["linkENG"]=site_url("frontend/jelajahiProduct/eng");
		$data["linkIND"]=site_url("frontend/jelajahiProduct/ind");
		
		
		$this->load->view('link',$data);
		$this->load->view('v_front_jelajahi_produk',$data);*/
	}

	public function searchGeneral(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_search_general', $data);
	}

	public function hasilSearchGeneral(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_general', $data);	
	}
	public function hasilSearchGeneral_nf(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_general_nf', $data);	
	}

	public function hasilSearchProduct(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_product', $data);	
	}
	public function hasilSearchProduct_nf(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_product_nf', $data);	
	}

	public function karir(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_karir', $data);
	}

	public function contact(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_contact', $data);
	}

	public function menjadiReseller(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view('v_front_reseller', $data);
	}

	public function temukanWakasa(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view("v_front_temukan_wakasa", $data);
	}

	public function afterLogin(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$this->load->view("v_front_after_login", $data);	
	}

	public function tentangKami(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();	
		$this->load->view('link');
		$this->load->view("v_front_tentang_kami", $data);
	}

	public function header(){
		$this->load->view('link');
		$this->load->view("v_header");
	}

	public function bannerpolos(){
		$this->load->view('link');
		$this->load->view("v_banner_polos");
	}


	public function search_g(){
		$inp = $this->input->post('search_input');
		if ($inp=="no"){
			$this->hasilSearchGeneral_nf();
		}
		else {
			$this->hasilSearchGeneral();	
		}
	}

	public function search_p(){
		$inp = $this->input->post('search_input');
		if ($inp=="no"){
			$this->hasilSearchProduct_nf();
		}
		else {
			$this->hasilSearchProduct();	
		}
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
}
?>