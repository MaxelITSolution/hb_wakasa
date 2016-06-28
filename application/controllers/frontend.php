<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

/*MICHAEL PAKE*/
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(Array("url"));
		$this->load->model("M_frontend");
	}

	public function tes(){
		$this->load->database();
		$this->load->view('link');
		$this->load->model('M_frontend');
		$this->load->library('pagination');
		$config['total_rows'] = $this->M_frontend->totalProduct();
  
		  $config['base_url'] = base_url()."frontend/tes";
		  $config['per_page'] = 4;
		  $config['uri_segment'] = '3';

		  $config['full_tag_open'] = '<div class="pagination"><ul>';
		  $config['full_tag_close'] = '</ul></div>';

		  $config['first_link'] = '« First';
		  $config['first_tag_open'] = '<li class="prev page">';
		  $config['first_tag_close'] = '</li>';

		  $config['last_link'] = 'Last »';
		  $config['last_tag_open'] = '<li class="next page">';
		  $config['last_tag_close'] = '</li>';

		  $config['next_link'] = 'Next →';
		  $config['next_tag_open'] = '<li class="next page">';
		  $config['next_tag_close'] = '</li>';

		  $config['prev_link'] = '← Previous';
		  $config['prev_tag_open'] = '<li class="prev page">';
		  $config['prev_tag_close'] = '</li>';

		  $config['cur_tag_open'] = '<li class="active"><a href="">';
		  $config['cur_tag_close'] = '</a></li>';

		  $config['num_tag_open'] = '<li class="page">';
		  $config['num_tag_close'] = '</li>';


		  $this->pagination->initialize($config);
		   

		  $query = $this->M_frontend->getProduct(4,$this->uri->segment(3));
		  
		  $data['MOVIES'] = null;
		  
		  if($query){
		   $data['MOVIES'] =  $query;
		  }

		  $this->load->view('test.php', $data);
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
	public function user_logout(){
		$this->session->set_userdata('user_login', 'no');
		$this->session->set_userdata('user_name', 'nn');
		redirect('home');
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
		$table = "new_product";
		$data['new_product'] = $this->M_frontend->load($table);
		$table = "unggulan";
		$data['unggulan'] = $this->M_frontend->load($table);
		$table = "banner_home";
		$data['banner_home'] = $this->M_frontend->load($table);
		$this->load->view('v_front_home', $data);	
		redirect('home');
	}
	
	public function home(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "new_product";
		$data['new_product'] = $this->M_frontend->load($table);
		$table = "unggulan";
		$data['unggulan'] = $this->M_frontend->load($table);
		$table = "banner_home";
		$data['banner_home'] = $this->M_frontend->load($table);
		$this->load->view('link');
		$this->load->view('v_front_home', $data);
	}

	public function jelajahiProduct(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "new_product";
		$data['new_product'] = $this->M_frontend->load($table);
		$table = "unggulan";
		$data['unggulan'] = $this->M_frontend->load($table);
		$table = "banner_produk";
		$data['banner_produk'] = $this->M_frontend->load($table);
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
		$data['prov'] = "XXX";
		$this->load->view('link');
		$this->load->view('v_front_hasil_search_general_nf', $data);	
	}

	public function hasilSearchProduct(){
		$this->load->view('link');
		$this->data['indo'] = $this->M_frontend->get_content_ina();
		$this->data['eng'] = $this->M_frontend->get_content_eng();
		$table = "banner_produk";
		$data['banner_produk'] = $this->M_frontend->load($table);
		$this->load->view('v_front_hasil_search_product_temp', $this->data);
	}

	public function hasilSearchProduct_($inp){
		$this->load->view('link');
		$this->data['indo'] = $this->M_frontend->get_content_ina();
		$this->data['eng'] = $this->M_frontend->get_content_eng();
		$table = "banner_produk";
		$data['banner_produk'] = $this->M_frontend->load($table);
		$page = 1;
      	if ($this->input->get("page") != "") {
        	$page = $this->input->get("page");
	    }
	    $perpage = 4;
	    $start = ($page-1) * $perpage;
	   	$this->data['product'] 	= $this->db->select('p.*')
		    								   ->from('product as p')
		    								   ->where('p.product_name_eng', $inp)
		    								   ->limit(4, $start)
		    								   ->get()
		    								   ->result();
	    $rows = $this->db->count_all('product');
	    $this->data['page_count'] = $rows / $perpage + ($rows % $perpage > 0 ? 1 : 0);
	    $this->data['current_page'] = $page;
    	$this->load->view('v_front_hasil_search_product', $this->data);
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
		$table = "banner_karir";
		$data['banner_karir'] = $this->M_frontend->load($table);
		$this->load->view('link');
		$this->load->view('v_front_karir', $data);
	}

	public function contact(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "banner_kontak";
		$data['banner_kontak'] = $this->M_frontend->load($table);
		$this->load->view('link');
		$this->load->view('v_front_contact', $data);
	}

	public function menjadiReseller(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "banner_reseller";
		$data['banner_reseller'] = $this->M_frontend->load($table);
		$this->load->view('link');
		$this->load->view('v_front_reseller', $data);
	}

	public function temukanWakasa(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "provinsi";
		$data['provinsi'] = $this->M_frontend->load($table);
		$table = "city";
		$data['city'] = $this->M_frontend->load($table);
		$table = "banner_temukan";
		$data['banner_temukan'] = $this->M_frontend->load($table);
		$this->load->view('link');
		$this->load->view("v_front_temukan_wakasa", $data);
	}

	public function search_p(){
		$this->load->database();
		$this->load->model('M_paging');
		$inp = $this->input->post('search_input');
		$inp1 = $this->input->post('search_input1');
		$inp_make = $this->input->post('txt_make');
		$inp_model = $this->input->post('txt_model');


		$table = "banner_produk";
		$banner_produk = $this->M_frontend->load($table);

		$limit = 4;
		if ($inp!="" && $inp1==""){
			if ($inp_make!="" && $inp_model==""){
				$query = $this->M_paging->getDetail_mk($limit, $inp, $inp_make);
				$total_rows = $this->M_paging->countDetail_mk($inp, $inp_make);
			}

			if ($inp_make=="" && $inp_model==""){
				$query = $this->M_paging->getDetail($limit, $inp);
				$total_rows = $this->M_paging->countDetail($inp);
			}

			if ($inp_make=="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_md($limit, $inp, $inp_model);
				$total_rows = $this->M_paging->countDetail_md($inp, $inp_model);
			}

			if ($inp_make!="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_mk_md($limit, $inp, $inp_make, $inp_model);
				$total_rows = $this->M_paging->countDetail_mk_md($inp, $inp_make, $inp_model);
			}
		}

		if ($inp=="" && $inp1==""){
			if ($inp_make!="" && $inp_model==""){
				$query = $this->M_paging->getDetail_mk_nn($limit, $inp_make);
				$total_rows = $this->M_paging->countDetail_mk_nn($inp_make);
			}

			if ($inp_make=="" && $inp_model==""){
				$query = $this->M_paging->getDetail_nn($limit);
				$total_rows = $this->M_paging->countDetail_nn();
			}

			if ($inp_make=="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_md_nn($limit, $inp_model);
				$total_rows = $this->M_paging->countDetail_md_nn($inp_model);
			}

			if ($inp_make!="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_mk_md_nn($limit, $inp_make, $inp_model);
				$total_rows = $this->M_paging->countDetail_mk_md_nn($inp_make, $inp_model);
			}
		}

		if ($inp=="" && $inp1!=""){
			if ($inp_make!="" && $inp_model==""){
				$query = $this->M_paging->getDetail_mk1($limit, $inp1, $inp_make);
				$total_rows = $this->M_paging->countDetail_mk1($inp1, $inp_make);
			}

			if ($inp_make=="" && $inp_model==""){
				$query = $this->M_paging->getDetail1($limit, $inp1);
				$total_rows = $this->M_paging->countDetail1($inp1);
			}

			if ($inp_make=="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_md1($limit, $inp1, $inp_model);
				$total_rows = $this->M_paging->countDetail_md1($inp1, $inp_model);
			}

			if ($inp_make!="" && $inp_model!=""){
				$query = $this->M_paging->getDetail_mk_md1($limit, $inp1, $inp_make, $inp_model);
				$total_rows = $this->M_paging->countDetail_mk_md1($inp1, $inp_make, $inp_model);
			}
		}

		$config["full_tag_open"] = '<ul class="pagination pull-right">';
		$config["full_tag_close"] = '</ul>';	
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = '<li id="first">';
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = '<li id="last">';
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li id="next">';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li id="prev">';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active" id="page_active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li id="page_num" onclick="cek();">';
		$config['num_tag_close'] = '</li>';

		$config['num_links'] = 2;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['base_url'] = site_url('Frontend/search_p');
		$this->load->library('pagination', $config);
		$page_links = $this->pagination->create_links();

		$total_page = $total_rows;
		$per_hal = $limit;

		$total=$total_rows;
		$name=$inp;

		$this->load->model('M_frontend');
		$indo = $this->M_frontend->get_content_ina();
		$eng = $this->M_frontend->get_content_eng();
		$table = "model";
		$models = $this->M_frontend->load($table);

		if ($total<=0){
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_product_nf', compact('name', 'indo', 'eng','models','banner_produk'));
		} else {
			$this->load->view('link');
			$this->load->view("v_front_hasil_search_product", compact('query', 'page_links', 'indo', 'eng', 'total_page', 'per_hal','name','total','models','banner_produk'));
		}
	}

	/*public function search_p(){
		$this->load->database();
		$this->load->model('M_frontend');
		$inp = $this->input->post('search_input');
		$indo = $this->M_frontend->get_content_ina();
		$eng = $this->M_frontend->get_content_eng();
		$name = $inp;
		$result = $this->M_frontend->countProduct($inp);
		if($result){
			$this->load->database();
			$this->load->model('M_paging');
			$pg = "search_no_detail";
			$limit = 4;
			$query = $this->M_paging->getData_detail1($pg, $limit, $inp);
			$total_rows = $result;
			$total = $result;

			$config["full_tag_open"] = '<ul class="pagination pull-right">';
			$config["full_tag_close"] = '</ul>';	
			$config["first_link"] = "&laquo;";
			$config["first_tag_open"] = "<li>";
			$config["first_tag_close"] = "</li>";
			$config["last_link"] = "&raquo;";
			$config["last_tag_open"] = "<li>";
			$config["last_tag_close"] = "</li>";
			$config['next_link'] = '&gt;';
			$config['next_tag_open'] = '<li id="next">';
			$config['next_tag_close'] = '<li>';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li id="prev">';
			$config['prev_tag_close'] = '<li>';
			$config['cur_tag_open'] = '<li class="active" id="page_active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li id="page_num" onclick="cek();">';
			$config['num_tag_close'] = '</li>';

			$config['total_rows'] = $total_rows;
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['base_url'] = site_url('Frontend/search_p');
			$this->load->library('pagination', $config);
			$page_links = $this->pagination->create_links();

			$total_page = $total_rows;
			$per_hal = $limit;

			$this->load->model('M_frontend');
			$indo = $this->M_frontend->get_content_ina();
			$eng = $this->M_frontend->get_content_eng();

			$this->load->view('link');
			$this->load->view('v_front_hasil_search_product', compact('query', 'page_links', 'indo', 'eng', 'total_page', 'per_hal', 'name', 'total'));	
		}else{
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_product_nf', compact('name', 'indo', 'eng'));
		}
	}*/

	public function search_g(){
		$this->load->database();
		$this->load->model('M_paging');
		$uinp = $this->input->post('search_input');
		$limit = 5;
		$query = $this->M_paging->getDataGeneral($limit, $uinp);
		$total_rows = $this->M_paging->countDataGeneral($uinp);


		$table = "banner_general";
		$banner_general = $this->M_frontend->load($table);

		$config["full_tag_open"] = '<ul class="pagination pull-right">';
		$config["full_tag_close"] = '</ul>';	
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li id="next">';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li id="prev">';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active" id="page_active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li id="page_num" onclick="cek();">';
		$config['num_tag_close'] = '</li>';

		$config['total_rows'] = $total_rows;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['base_url'] = site_url('Frontend/search_g');
		$this->load->library('pagination', $config);
		$page_links = $this->pagination->create_links();

		$total_page = $total_rows;
		$per_hal = $limit;

		$total=$total_rows;
		$name=$uinp;

		$this->load->model('M_frontend');
		$indo = $this->M_frontend->get_content_ina();
		$eng = $this->M_frontend->get_content_eng();

		if ($total<=0){
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_general_nf', compact('name', 'indo', 'eng','models','banner_general'));
		} else {
			$this->load->view('link');
			$this->load->view("v_front_hasil_search_general", compact('query', 'page_links', 'indo', 'eng', 'total_page', 'per_hal','name','total','models','banner_general'));
		}
	}

	/*public function search_g(){
		$this->load->database();
		$this->load->model('M_frontend');
		$inp = $this->input->post('search_input');
		$result = $this->M_frontend->countGeneral($inp);
		$indo = $this->M_frontend->get_content_ina();
		$eng = $this->M_frontend->get_content_eng();
		if($result){
			$name = $inp;
			$this->load->model('M_paging');
			$pg = "search_general";
			$limit = 5;
			$query = $this->M_paging->getData_detail1($pg, $limit, $inp);
			$total_rows = $result;

			$config["full_tag_open"] = '<ul class="pagination pull-right">';
			$config["full_tag_close"] = '</ul>';	
			$config["first_link"] = "&laquo;";
			$config["first_tag_open"] = "<li>";
			$config["first_tag_close"] = "</li>";
			$config["last_link"] = "&raquo;";
			$config["last_tag_open"] = "<li>";
			$config["last_tag_close"] = "</li>";
			$config['next_link'] = '&gt;';
			$config['next_tag_open'] = '<li id="next">';
			$config['next_tag_close'] = '<li>';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li id="prev">';
			$config['prev_tag_close'] = '<li>';
			$config['cur_tag_open'] = '<li class="active" id="page_active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li id="page_num" onclick="cek();">';
			$config['num_tag_close'] = '</li>';

			$config['total_rows'] = $total_rows;
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['base_url'] = site_url('Frontend/search_g');
			$this->load->library('pagination', $config);
			$page_links = $this->pagination->create_links();

			$total_page = $total_rows;
			$per_hal = $limit;

			$this->load->view('link');
			$this->load->view("v_front_hasil_search_general", compact('name', 'query', 'page_links', 'indo', 'eng', 'total_page', 'per_hal'));
		} else {
			$name = $inp;
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_general_nf', compact('name', 'indo', 'eng'));	
		}
	}*/

	public function afterLogin(){
		$this->load->database();
		$this->load->model('M_paging');
		$pg = "after_login";
		$limit = 20;
		$query = $this->M_paging->getData($pg, $limit);
		$total_rows = $this->M_paging->countData($pg);

		$table = "banner_login";
		$banner_login = $this->M_frontend->load($table);

		$config["full_tag_open"] = '<ul class="pagination pull-right">';
		$config["full_tag_close"] = '</ul>';	
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = '<li id="first">';
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = '<li id="last">';
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li id="next">';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li id="prev">';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active" id="page_active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li id="page_num" onclick="cek();">';
		$config['num_tag_close'] = '</li>';

		$config['num_links'] = 2;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['base_url'] = site_url('Frontend/afterLogin');
		$this->load->library('pagination', $config);
		$page_links = $this->pagination->create_links();

		$total_page = $total_rows;
		$per_hal = $limit;

		$this->load->model('M_frontend');
		$indo = $this->M_frontend->get_content_ina();
		$eng = $this->M_frontend->get_content_eng();

		$this->load->view('link');
		$this->load->view("v_front_after_login_", compact('query', 'page_links', 'indo', 'eng', 'total_page', 'per_hal','banner_login'));
	}

	/*public function afterLogin(){
		$this->load->database();
		$this->load->model('M_frontend');
		$this->load->view('link');
		$this->data['indo'] = $this->M_frontend->get_content_ina();
		$this->data['eng'] = $this->M_frontend->get_content_eng();
		$page = 1;
      	if ($this->input->get("page") != "") {
        	$page = $this->input->get("page");
	    }
	    $perpage = 20;
	    $start = ($page-1) * $perpage;
	   	$this->data['product'] 	= $this->db->select('p.*')
		    								   ->from('product as p')
		    								   ->limit(20, $start)
		    								   ->get()
		    								   ->result();
	    $rows = $this->db->count_all('product');
	    $this->data['page_count'] = $rows / $perpage + ($rows % $perpage > 0 ? 1 : 0);
	    $this->data['current_page'] = $page;
		$this->load->view("v_front_after_login", $this->data);
	}*/

	public function tentangKami(){
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$table = "banner_tentang";
		$data['banner_tentang'] = $this->M_frontend->load($table);	
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

	function justName($inp, $start){
		$this->data['product'] 	= $this->db->select('p.*')
	    								   ->from('product as p')
	    								   ->like('product_name_eng', $inp)
	    								   ->like('product_name_ina', $inp)
	    								   ->limit(4, $start)
	    								   ->get()
	    								   ->result();
	}

	function justMk($inp, $start, $make){
		$this->data['product'] 	= $this->db->select('p.*')
	    								   ->from('product as p')
	    								   ->like('product_name_eng', $inp)
	    								   ->like('product_name_ina', $inp)
	    								   ->where('product_make', $make)
	    								   ->limit(4, $start)
	    								   ->get()
	    								   ->result();
	}

	function justMd($inp, $start, $model){
		$this->data['product'] 	= $this->db->select('p.*')
	    								   ->from('product as p')
	    								   ->like('product_name_eng', $inp)
	    								   ->like('product_name_ina', $inp)
	    								   ->where('product_model', $model)
	    								   ->limit(4, $start)
	    								   ->get()
	    								   ->result();
	}

	function Mk_Md($inp, $start, $make, $model){
		$this->data['product'] 	= $this->db->select('p.*')
	    								   ->from('product as p')
	    								   ->like('product_name_eng', $inp)
	    								   ->like('product_name_ina', $inp)
	    								   ->where('product_make', $make)
	    								   ->where('product_model', $model)
	    								   ->limit(4, $start)
	    								   ->get()
	    								   ->result();	
	}

	public function search_p_d(){
		$this->load->database();
		$this->load->model('M_frontend');
		$inp = $this->input->post('search_input');
		$inp1 = $this->input->post('search_input1');
		$make = $this->input->post('txt_make');
		$model = $this->input->post('txt_model');
		$this->data['indo'] = $this->M_frontend->get_content_ina();
		$this->data['eng'] = $this->M_frontend->get_content_eng();
		if ($inp1==""){
			$this->data['name'] = $inp;
			if ($inp!=""){
				if ($make=="" && $model==""){
					$table = "n";
					$result = $this->M_frontend->countProduct_dt($table, $inp, $make, $model);	
				}
				if ($make!="" && $model==""){
					$table = "n_mk";
					$result = $this->M_frontend->countProduct_dt($table, $inp, $make, $model);
				}
				if ($make=="" && $model!=""){
					$table = "n_md";
					$result = $this->M_frontend->countProduct_dt($table, $inp, $make, $model);	
				}
				if ($make!="" && $model!=""){
					$table = "n_mk_md";
					$result = $this->M_frontend->countProduct_dt($table, $inp, $make, $model);		
				}
			} else {
				$this->load->view('link');
				$this->load->view('v_front_hasil_search_product_nf', $this->data);	
			}
		} else {
			$this->data['name'] = $inp1;
			$result = $this->M_frontend->countProduct_d($inp1, $make, $model);
		}

		if($result){
			$this->data['total'] = $result;

			$page = 1;
	      	if ($this->input->get("page") != "") {
	        	$page = $this->input->get("page");
		    }
		    $perpage = 4;
		    $start = ($page-1) * $perpage;
		   	
		    $rows = $this->db->count_all('product');
		    $this->data['page_count'] = $result / $perpage + ($result % $perpage > 0 ? 1 : 0);
		    $this->data['current_page'] = $page;

		    if ($inp!=""){
		    	if ($make=="" && $model==""){
					$this->justName($inp, $start);
				}
				if ($make!="" && $model==""){
					$this->justMk($inp, $start, $make);	
				}
				if ($make=="" && $model!=""){
					$this->justMd($inp, $start, $model);
				}
				if ($make!="" && $model!=""){
					$this->Mk_Md($inp, $start, $make, $model);
				}
		    }

		    $this->data['models'] = $this->db->distinct()
		    								 ->select('product_model')
		    								 ->from('product')
		    								 ->order_by('product_model', 'asc')
		    								 ->get()
		    								 ->result();

			$this->load->view('link');
			$this->load->view('v_front_hasil_search_product_', $this->data);	
		}else{
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_product_nf', $this->data);
		}
	}

	public function search_wakasa(){
		$this->load->database();
		$this->load->model('M_frontend');
		$inp1 = $this->input->post('prov');
		$inp2 = $this->input->post('kota');
		$this->data['indo'] = $this->M_frontend->get_content_ina();
		$this->data['eng'] = $this->M_frontend->get_content_eng();
		$this->data['prov'] = $inp1;
		$this->data['city'] = $inp2;
		$table = "banner_temukan";
		$this->data['banner_temukan'] = $this->M_frontend->load($table);
		
		$table = "provinsi";
		$this->data['provinsi'] = $this->M_frontend->load($table);
		$table = "city";
		$this->data['city'] = $this->M_frontend->load($table);
		$this->data['hasil'] = $this->M_frontend->getReseller($inp1, $inp2);   
		

		$result = $this->M_frontend->countReseller($inp1, $inp2);
		if ($result){
			$this->data['total'] = $result;

			/*$page = 1;
	      	if ($this->input->get("page") != "") {
	        	$page = $this->input->get("page");
		    }
		    $perpage = 2;
		    $start = ($page-1) * $perpage;
		   	$this->data['hasil'] 	= $this->db->select('*')
		   	                                   ->from('reseller')
		   	                                   ->like('reseller_provinsi', $inp2)
		   									   ->like('reseller_kota', $inp1)
		   									   ->limit(2, $start)
		   									   ->get();
		    $rows = $this->db->count_all('reseller');

		    $this->data['page_count'] = $rows / $perpage + ($rows % $perpage > 0 ? 1 : 0);
		    $this->data['current_page'] = $page;*/


			$this->load->view('link');
			$this->load->view('v_front_hasil_search_wakasa', $this->data);
		} else {
			$this->data['total'] = 0;
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_wakasa', $this->data);
		}
		/*$data['hasil'] = $this->M_frontend->cekReseller_($inp1, $inp2);
		$haveitem = $this->M_frontend->cekReseller_new($inp1, $inp2);
		print($haveitem);
		if ($haveitem>0)
		{
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_general', $data);
		} else {
			$this->load->view('link');
			$this->load->view('v_front_hasil_search_general_nf', $data);
		}*/
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

	public function search_product_temp(){
		$inp = $this->input->post('search_input');
		$this->load->database();
		$this->load->model('M_frontend');
		$data['indo'] = $this->M_frontend->get_content_ina();
		$data['eng'] = $this->M_frontend->get_content_eng();
		$this->load->view('link');
		$log = $_SESSION['user_login'];
		if ($log=="no"){
			$this->load->view('v_front_reseller', $data);
		} else {
			if ($inp=="no"){
				$this->load->view('v_front_hasil_search_product_nf_temp', $data);
			} else {
				$this->load->view('v_front_hasil_search_product_temp', $data);
			}
		}
	}

}
?>