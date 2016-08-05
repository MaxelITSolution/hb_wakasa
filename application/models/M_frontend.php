<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Frontend extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function load($table){
		if ($table=="unggulan"){
			$query = $this->db->query('SELECT * FROM products WHERE is_unggulan = 1 and is_active = 1');
			return $query;
		}
		if ($table=="new_product"){
			$query = $this->db->query('SELECT * FROM products WHERE is_new = 1 and is_active = 1');
			return $query;
		}
		if ($table=="city"){
			$query = $this->db->query('SELECT * FROM city');
			return $query;
		}
		if ($table=="provinsi"){
			$query = $this->db->query('SELECT * FROM provinsi');
			return $query;
		}
		if ($table=="model"){
			$query = $this->db->query('(SELECT DISTINCT make, model1 AS model FROM products) UNION (SELECT DISTINCT make, model2 AS model FROM products)');
			return $query;
		}
		if ($table=="make"){
			$query = $this->db->query("SELECT DISTINCT make FROM products");
			return $query;
		}
		if ($table=="banner_home"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='home'");
			return $query;
		}
		if ($table=="banner_produk"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='product'");
			return $query;
		}
		if ($table=="banner_general"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='general'");
			return $query;
		}
		if ($table=="banner_kontak"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='kontak'");
			return $query;
		}
		if ($table=="banner_reseller"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='reseller'");
			return $query;
		}
		if ($table=="banner_temukan"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='temukan'");
			return $query;
		}
		if ($table=="banner_karir"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='karir'");
			return $query;
		}
		if ($table=="banner_login"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='login'");
			return $query;
		}
		if ($table=="banner_tentang"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='tentang'");
			return $query;
		}
		if ($table=="content_tentang"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='content_about'");
			return $query;
		}
	}

	public function countProduct_dt($table, $inp, $make, $model){
		if ($table=="n"){
			$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%'");
			if($query->num_rows() > 0){
				return $query->num_rows();
			} else {
				return false;
			}
		}
		if ($table=="n_mk"){
			$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%' AND product_make='$make'");
			if($query->num_rows() > 0){
				return $query->num_rows();
			} else {
				return false;
			}
		}
		if ($table=="n_md"){
			$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%' AND product_model='$model'");
			if($query->num_rows() > 0){
				return $query->num_rows();
			} else {
				return false;
			}
		}
		if ($table=="n_mk_md"){
			$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%' AND product_make='$make' AND product_model=$model");
			if($query->num_rows() > 0){
				return $query->num_rows();
			} else {
				return false;
			}
		}
	}

	/*public function cekReseller($inp1, $inp2){
		echo $this->db
				  ->where('reseller_isactive',1)
       			  ->count_all_results('reseller');
	}

	public function cekReseller_($inp1, $inp2){
		$query = $this->db->query("SELECT reseller_id FROM reseller WHERE reseller_kota='$inp2' OR reseller_provinsi='$inp1'");
		return $query;
	}

	public function cekReseller_new($inp1, $inp2){
		$query = $this->db->query("SELECT reseller_id FROM reseller WHERE reseller_kota='$inp2' OR reseller_provinsi='$inp1'");
		if($query->num_rows() > 0){
			return $query->row()->reseller_id;
		}
		return false;
	}*/

	public function countProduct($inp){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countProduct_d($inp, $make, $model){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%') AND product_make='$make' AND product_model='$model'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countGeneral($inp){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%' OR product_desc_eng LIKE '%$inp%' OR product_desc_ina LIKE '%$inp%' OR product_name_eng LIKE '%$inp%' OR product_make LIKE '%$inp%' OR product_model LIKE '%$inp%'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function getProduct($inp){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%' LIMIT 4");
		return $query;
	}

	public function countReseller($inp2){
		//$query = $this->db->query("SELECT reseller_id FROM reseller WHERE reseller_provinsi LIKE '$inp1' OR reseller_kota LIKE '$inp2'");
		$query = $this->db->query("SELECT reseller_id FROM reseller WHERE reseller_kota LIKE '$inp2' AND reseller_is_show=1");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function getReseller($inp2){
		$query = $this->db->query("SELECT * FROM reseller WHERE reseller_kota LIKE '$inp2' AND reseller_is_show=1 AND reseller_isactive=1");
		return $query;
	}

	function getMovies($limit=null,$offset=NULL){
	  $this->db->select("MOVIE_ID,FILM_NAME,DIRECTOR,RELEASE_YEAR");
	  $this->db->from('trn_movies');
	  $this->db->limit($limit, $offset);
	  $query = $this->db->get();
	  return $query->result();
	 }

	 function totalMovies(){
	  return $this->db->count_all_results('trn_movies');
	 }

	function getAllProduct($limit=null,$offset=NULL){
	  	$this->db->select("*");
	  	$this->db->from('product');
	  	$this->db->limit($limit, $offset);
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function totalAllProduct(){
		return $this->db->count_all_results('product');
	}

	function getProduct1($limit=null,$offset=NULL){
	  	$this->db->select("*");
	  	$this->db->from('product');
	  	$this->db->limit($limit, $offset);
	  	$query = $this->db->get();
	  	return $query->result();
	}
	function totalProduct(){
		return $this->db->count_all_results('product');
	}

	public function search_product($inp){
		$query = $this->db->query("SELECT * FROM product WHERE product_name_eng = '$inp'");
		return $query;
	}

	public function set_session(){
		$user_session = array(
			'user_register' => 'no',
			'user_login' => 'no',
			'user_lang' => 'ina',
			'user_name' => 'nn',
			'user_search' => ''
		);
		$this->session->set_userdata($user_session);
		return true;
	}

	public function get_content_ina(){
		$query = $this->db->query('SELECT content_ina FROM content');
		return $query;
	}
	public function get_content_eng(){
		$query = $this->db->query('SELECT content_eng FROM content');
		return $query;
	}

	public function getData($tablename,$conditions)
	{
		if(!empty($conditions))
		{
			$this->db->where($conditions);
		}
		return $this->db->get($tablename)->result();
	}

	public function insert($table, $data1){
		if ($table == "new_message"){
			if($this->db->insert('user_message', $data1))
          		return true;
		}
		if ($table == "new_subscribe"){
			if($this->db->insert('user_subscribe', $data1))
          		return true;
		}
	}

	public function load_d($table, $bMake){
		if ($table=="getModel"){
			/*$query = $this->db->query("SELECT * FROM products WHERE make = '$bMake'");
			return $query;	*/
			$this->db->where('make', $bMake);
			return $this->db->get('products');
		}
	}

}
?>
