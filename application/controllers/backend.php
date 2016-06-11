<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->helper(Array("form","url"));
	}
	public function index(){
		$this->load->view('link');
		$this->load->view('v_admin_login');
	}
	
	public function dashboard(){
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		
		$table = "reseller_no_active";
		$data["data_reseller_no_active"] = $this->M_backend->load($table);
        $this->load->view('v_admin_dashboard', $data);
		$this->load->view('v_sidebar_foot');
	}
	
	public function detail_reseller(){
		$this->load->database();
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$this->load->model('M_backend');
		$id =  $this->input->get('id');
		$table = "reseller";
		$data["reseller"] = $this->M_backend->load_du($table, $id);
        $this->load->view('v_admin_detail_reseller', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function conf_reseller(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['reseller_isactive'] = 1;
		$id =  $this->input->post('reseller_id');
		$table = "conf_reseller";
		$this->M_backend->update($table, $data, $id);

		redirect('../backend/dashboard');
	}

	public function product(){
		$hasil = Array();
		$datum = $this->M_backend->getData("product",null);
		$hasil = Array();
		foreach($datum as $row)
		{
			Array_push($hasil,Array($row->product_id,$row->product_name_eng,"<a href='detail_update_product/".$row->product_id."'><span class='glyphicon glyphicon-user'></span> Detail </a> |
					<a id='Hapus' productID='".$row->product_id."' href='#'><span class='glyphicon glyphicon-trash'></span> Hapus</a>"));
		}
		$data["produk"] =json_encode($hasil);
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_master_product',$data);
		$this->load->view('v_sidebar_foot');
	}

	public function add_product(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_add_product');
		$this->load->view('v_sidebar_foot');	
	}

	public function detail_update_product(){
		$index=  $this->uri->segment(3);
		$datum = $this->M_backend->getData("product",Array("product_id"=>$index));
		$data["detailNameEng"]=$datum[0]->product_name_eng;
		$data["detailNameIna"]=$datum[0]->product_name_ina;
		$data["detailDescEng"]=$datum[0]->product_desc_eng;
		$data["detailDescIna"]=$datum[0]->product_desc_ina;
		$data["detailPicture"]=$datum[0]->product_image;
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_detail_update_product',$data);
		$this->load->view('v_sidebar_foot');		
	}
	
	public function administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('v_sidebar_foot');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$table = "administrator";
		$data["administrator"] = $this->M_backend->load($table);
        $this->load->view('v_admin_master_administrator', $data);
		$this->load->view('v_sidebar_foot');
	}

	public function add_administrator(){
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_add_administrator');
		$this->load->view('v_sidebar_foot');	
	}

	public function new_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		date_default_timezone_set("Asia/Jakarta");
		$data['admin_id'] = "ADM".date("dmYHis");
		$data['admin_uname'] = $this->input->post('admin_uname');
		$data['admin_email'] = $this->input->post('admin_mail');
		$data['admin_phone'] = $this->input->post('admin_phone');
		$data['admin_address'] = $this->input->post('admin_address');
		$admin_pass = $this->input->post('admin_password');
		$admin_pass_ = md5($admin_pass);
		$data['admin_password'] = $admin_pass_;
		$data['admin_create_date'] = date("Y/m/d");
		$data['admin_create_time'] = date("h:i:sa");
		$data['admin_isactive'] = 1;
		$table = "new_administrator";
		$this->M_backend->insert($table, $data);

		$this->administrator();
	}

	public function detail_update_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$this->load->view('link_');
		$this->load->view('v_sidebar');
		$id =  $this->input->get('id');
		$table = "administrator";
		$data["administrator"] = $this->M_backend->load_du($table, $id);
        $this->load->view('v_admin_detail_update_administrator', $data);
		$this->load->view('v_sidebar_foot');		
	}

	public function update_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$data['admin_uname'] = $this->input->post('admin_uname');
		$data['admin_email'] = $this->input->post('admin_mail');
		$data['admin_phone'] = $this->input->post('admin_phone');
		$data['admin_address'] = $this->input->post('admin_address');
		$id =  $this->input->post('admin_id');
		$table = "administrator";
		$this->M_backend->update($table, $data, $id);

		redirect('../backend/administrator');
	}

	public function delete_administrator(){
		$this->load->database();
		$this->load->model('M_backend');
		$id =  $this->input->get('id');
		$data['admin_isactive'] = 0;
		$table = "administrator";
		$this->M_backend->delete($table, $data, $id);

		redirect('../backend/administrator');
	}
	
	public function login(){
		$this->load->database();
		$this->load->model('M_backend');
		$umail = $this->input->post('admin_mail');
		$upass = $this->input->post('admin_password');
		$pass = md5($upass);
		$result = $this->M_backend->login($umail, $pass);
		if($result)
		{
			$this->dashboard();
		}
		else
		{
			echo '<script type="text/javascript">alert("Login Gagal! Pastikan Username dan Password Benar");</script>';
			$this->logout();
		}	
	}

	public function user_register(){
		$this->load->database();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('M_backend');
		$ureg_id = "RES".date("dmYHis");
		$uname = $this->input->post('uname_reg');
		$upass = $this->input->post('upass_reg');
		$upass_conf = $this->input->post('upass_conf_reg');
		$ufname = $this->input->post('uname_full_reg');
		$store_name = $this->input->post('nama_toko_reg');
		$store_address = $this->input->post('alamat_toko_reg');
		$store_city = $this->input->post('kota_reg');
		$store_provice = $this->input->post('provinsi_reg');
		$store_phone = $this->input->post('phone_reg');
		$uphone = $this->input->post('handphone_reg');
		$umail = $this->input->post('email_reg');
		$uknow_stat = $this->input->post('opt1');
		$u_buy_before = $this->input->post('opt_yn');
		$usince = $this->input->post('time_reg');
		$uknow_lain = $this->input->post('lainnya_reg');
		$ureg_date = date("Y/m/d");
		$ureg_time = date("h:i:sa");
		$uisactive = 0;

		/*CEK PASSWORD DAN KONFORM SAMA*/
		if ($upass == $upass_conf){
			$data['reseller_id'] = $ureg_id;
			$data['reseller_username'] = $uname;
			$data['reseller_password'] = md5($upass);
			$data['reseller_uname'] = $ufname;
			$data['reseller_nama_toko'] = $store_name;
			$data['reseller_alamat_toko'] = $store_address;
			$data['reseller_kota'] = $store_city;
			$data['reseller_provinsi'] = $store_provice;
			$data['reseller_phone_toko'] = $store_phone;
			$data['reseller_phone_hand'] = $uphone;
			$data['reseller_email'] = $umail;
			if ($uknow_stat=='4'){
				$data['reseller_know_wakasa'] = $uknow_lain;
			}else{
				$data['reseller_know_wakasa'] = $uknow_stat;
			}
			$data['reseller_buy_before'] = $u_buy_before;
			$data['reseller_since'] = $usince;
			$data['reseller_reg_date'] = $ureg_date;
			$data['reseller_reg_time'] =$ureg_time;
			$data['reseller_isactive'] =  $uisactive;
			$table = "new_reseller";
			$this->M_backend->insert($table, $data);
			redirect('../menjadireseller?r=1');	
		} else {
			redirect('../menjadireseller');	
		}

	}
	
	public function logout(){
		redirect('../backend');
	}
	
	public function DeleteData()
	{
		$temp = $this->input->post("productID");
		$this->M_backend->DeleteData("product",Array("product_id"=>$temp));
		
		$hasil = Array();
		$datum = $this->M_backend->getData("product",null);
		$hasil = Array();
		foreach($datum as $row)
		{
			Array_push($hasil,Array($row->product_id,$row->product_name_eng,"<a href='detail_update_product/".$row->product_id."'><span class='glyphicon glyphicon-user'></span> Detail </a> |
					<a id='Hapus' productID='".$row->product_id."' href='#'><span class='glyphicon glyphicon-trash'></span> Hapus</a>"));
		}
		$data["produk"] =json_encode($hasil);
		echo $data["produk"];
	}
	
	function do_upload()//Upload Gambar Ke folder 
	{
		$url = $this->input->post("url");
		$detailnameINA = $this->input->post("product_name_ina");
		$detailnameENG = $this->input->post("product_name_eng");
		
		$detailINA = $this->input->post("product_desc_ina");
		$detailENG = $this->input->post("product_desc_eng");
		
		//print($detailINA);print($detailnameINA);print($detailENG);print($detailnameENG);
		
		
		$config['upload_path'] ="asset/image/Upload";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->M_backend->updateData("product",Array("product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG),Array("product_id"=>$url));
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//print_r($data["upload_data"]["file_name"]);
			$this->M_backend->updateData("product",Array("product_image"=>$data["upload_data"]["file_name"],"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG),Array("product_id"=>$url));
		}
		$index = $url;
		$datum = $this->M_backend->getData("product",Array("product_id"=>$index));
		$data["detailNameEng"]=$datum[0]->product_name_eng;
		$data["detailNameIna"]=$datum[0]->product_name_ina;
		$data["detailDescEng"]=$datum[0]->product_desc_eng;
		$data["detailDescIna"]=$datum[0]->product_desc_ina;
		$data["detailPicture"]=$datum[0]->product_image;
		
		$this->load->view('link_');
		$this->load->view('v_sidebar');
        $this->load->view('v_admin_detail_update_product',$data);
		$this->load->view('v_sidebar_foot');		
	}
	function do_uploadAddProduct()
	{
		$detailnameINA = $this->input->post("product_name_ina");
		$detailnameENG = $this->input->post("product_name_eng");
		
		$detailINA = $this->input->post("product_desc_ina");
		$detailENG = $this->input->post("product_desc_eng");
		
		$product_id = "PRD".date("dmYHis");
		
		$config['upload_path'] ="asset/image/Upload";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		$config['file_name'] = $product_id;
		
		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
		    $date = $this->M_backend->getDate1()->result()[0]->tanggal;
			$time =  $this->M_backend->getTime()->result()[0]->time;
			$this->M_backend->insertData("product",Array("product_id"=>$product_id,"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_create_date"=>$date,"product_create_time"=>$time));
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		    $date = $this->M_backend->getDate1()->result()[0]->tanggal;
			$time =  $this->M_backend->getTime()->result()[0]->time;
			$this->M_backend->insertData("product",Array("product_id"=>$product_id,"product_image"=>$data["upload_data"]["file_name"],"product_name_ina"=>$detailnameINA,"product_name_eng"=>$detailnameENG,"product_desc_ina"=>$detailINA,"product_desc_eng"=>$detailENG,"product_create_date"=>$date,"product_create_time"=>$time));
			
		}
		redirect("backend/add_product");
		
	}
	
}
?>