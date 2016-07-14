<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Paging extends CI_Model
{

	Public function get_my_data($limit, $offset) {
		$this->db->like("nama", 'selang');
		$this->db->like("make", 'MITSUBISHI');
	  	$query = $this->db->get('products', $limit, $offset);
	  	return $query->result_array();
	}

	public function record_count($inp, $inp_make) {
		return $query = $this->db->like("nama", $inp)
								 ->like("make", $inp_make)
								 ->get('products')->num_rows();
		//return $this->db->count_all("products");
	}

	public function fetch_data($limit, $id, $inp, $inp_make) {
		$this->db->limit($limit);
		$query = $this->db->like("nama", $inp)
						  ->like("make", $inp_make)
						  ->get("products");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}

			return $data;
		}
		return false;
	}

	function lihat($sampai,$dari){
		return $query = $this->db->like("nama", 'selang')
								 ->like("make", 'MITSUBISHI')
								 ->get('products',$sampai,$dari)->result();
		
	}

	function j_s1($sampai,$dari, $inp, $inp_make){
		return $query = $this->db->like("nama", $inp)
								 ->like("make", $inp_make)
								 ->get('products',$sampai,$dari)->result();
		
	}

	function j_s($inp, $inp_make){
		return $query = $this->db->like("nama", '$inp')
								 ->like("make", '$inp_make')
								 ->get('products')->num_rows();
	}
 
	function jumlah(){
		return $this->db->get('products')->num_rows();
	}

	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	function get_search_products(){
		$sql = "select * from temp_products";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	function get_temp_products($limit, $start){
		$sql = "select products.* from products, temp_products where products.id = temp_products.id limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function cekS_trun(){
		$query = $this->db->query("TRUNCATE TABLE temp_products");
		return true;
	}



	//======================================================================================

	function _count_inp($inp){
		$sql = "select * from products where nama like '%$inp%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	function _get_inp($inp, $limit, $start){
		$sql = "select * from products where nama like '%$inp%' limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	//======================================================================================


	//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

		function get_products($limit, $start, $inp = NULL)
		{
			if ($inp == "NIL") $inp = "";
			$sql = "select * from products where nama like '%$inp%' limit " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

		function get_products_count($inp = NULL){
			if ($inp == "NIL") $inp = "";
			$sql = "select * from products where nama like '%$inp%'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

		function get_products_count_inp_mk($inp = NULL, $inp_make=NULL){
			if ($inp == "NIL") $inp = "";
			if ($inp_make == "NIL") $inp_make = "";
			$sql = "select * from products where nama like '%$inp%' and make like '%$inp_make%'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}
			
		function get_products_inp_mk($limit, $start, $inp = NULL)
		{
			if ($inp == "NIL") $inp = "";
			if ($inp_make == "NIL") $inp_make = "";
			$sql = "select * from products where nama like '%$inp%' and make like '%$inp_make%' limit " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
		}

	//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>








	//===============================================================================================================

	function cekS_s($inp){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE nama LIKE '%$inp%'");
		return true;
	}

	function cekS_s_ctr($inp){
		$sql = "SELECT id FROM products WHERE nama LIKE '%$inp%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	//===============================================================================================================

	function cekS_s_mk($inp, $inp_make){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE nama LIKE '%$inp%' AND make LIKE '%$inp_make%'");
		return true;	
	}

	function cekS_s_md($inp, $inp_model){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE nama LIKE '%$inp%' AND model1 LIKE '%$inp_model%' OR model2 LIKE '%$inp_model%'");
		return true;	
	}

	function cekS_s_mk_md($inp, $inp_make, $inp_model){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE nama LIKE '%$inp%' AND make LIKE '%$inp_make%' AND model1 LIKE '%$inp_model%' OR model2 LIKE '%$inp_model%'");
		return true;		
	}

	function cekS_mk($inp_make){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE make LIKE '%$inp_make%'");
		return true;
	}

	function cekS_md($inp_model){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE model1 LIKE '%$inp_model%' OR model2 LIKE '%$inp_model%'");
		return true;	
	}

	function cekS_mk_md($inp_make, $inp_model){
		$query = $this->db->query("INSERT INTO temp_products SELECT  id FROM    products WHERE make LIKE '%inp_make%' AND model1 LIKE '%$inp_model%' OR model2 LIKE '%$inp_model%'");
		return true;		
	}


	function get_books($limit, $start, $st = NULL)
	{
		if ($st == "NIL") $st = "";
		$sql = "select * from products where nama like '%$st%' limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function get_books_count($st = NULL)
	{
		if ($st == "NIL") $st = "";
		$sql = "select * from products where nama like '%$st%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	function getDetail_($limit, $start, $st = NULL)
	{
		if ($st == "NIL") $st = "";
		$sql = "select * from products where nama like '%$st%' limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query;
	}

//==================================================================================
	function get_products_s_mk($limit, $start, $inp = NULL, $inp_make = NULL){
		if ($inp == "NIL") $inp = "";
		if ($inp_make == "NIL") $inp_make = "";
		$sql = "select * from products where make like '%$inp_make%' and nama like '%$inp%' limit " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function get_products_count_s_mk($inp = NULL, $inp_make = NULL){
		if ($inp == "NIL") $inp = "";
		if ($inp_make == "NIL") $inp_make = "";
		$sql = "select * from products where make like '%$inp_make%' and nama like '%$inp%'";
		$query = $this->db->query($sql);
		return $query->num_rows();	
	}

//==================================================================================

















	public function getData($pg, $limit){
		$offset = $this->uri->segment(3);
		if ($pg=="after_login"){
			$table = "products";
			return $this->db->from($table)
							->limit($limit, $offset)
							->get();
		}
	}

//========================================
	public function getDetail($limit, $inp){
		$offset = $this->uri->segment(3);
		$table = "products";
		return $this->db->select('*')
						->from($table)
						->or_like('nama', $inp)
						->limit($limit, $offset)
						->get();
	}
	public function countDetail($inp){
		$this->db->or_like('nama', $inp);
		$query = $this->db->get('products');
		return $query->num_rows();
	}

//===========================================

	public function getDetail_nn($limit){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->limit($limit, $offset)
						->get();
	}

	public function getDetail1($limit, $inp1){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->or_like('product_name_eng', $inp1)
						->or_like('product_name_ina', $inp1)
						->limit($limit, $offset)
						->get();
	}

	public function countDetail_nn(){
		$query = $this->db->get('product');
		return $query->num_rows();	
	}

	public function countDetail1($inp1){
		$this->db->or_like('product_name_eng', $inp1);
		$this->db->or_like('product_name_ina', $inp1);
		$query = $this->db->get('product');
		return $query->num_rows();
	}

	public function getDetail_mk($limit, $inp, $inp_make){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->where('product_name_eng LIKE', '%'.$inp.'%')
						->or_where('product_name_ina LIKE', '%'.$inp.'%')
						->limit($limit, $offset)
						->get();
	}

	public function getDetail_mk_nn($limit, $inp_make){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->limit($limit, $offset)
						->get();
	}

	public function getDetail_mk1($limit, $inp1, $inp_make){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->where('product_name_eng LIKE', '%'.$inp1.'%')
						->or_where('product_name_ina LIKE', '%'.$inp1.'%')
						->limit($limit, $offset)
						->get();
	}

	public function countDetail_mk($inp, $inp_make){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%') AND product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_mk_nn($inp_make){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_mk1($inp1, $inp_make){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp1%' OR product_name_ina LIKE '%$inp1%') AND product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function getDetail_md($limit, $inp, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_model LIKE', '%'.$inp_model.'%')
						->where('product_name_eng LIKE', '%'.$inp.'%')
						->or_where('product_name_ina LIKE', '%'.$inp.'%')
						->limit($limit, $offset)
						->get();
	}

	public function getDetail_md_nn($limit, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_model LIKE', '%'.$inp_model.'%')
						->limit($limit, $offset)
						->get();
	}

	public function getDetail_md1($limit, $inp1, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_model LIKE', '%'.$inp_model.'%')
						->where('product_name_eng LIKE', '%'.$inp1.'%')
						->or_where('product_name_ina LIKE', '%'.$inp1.'%')
						->limit($limit, $offset)
						->get();
	}

	public function countDetail_md($inp, $inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%') AND product_model='$inp_model'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_md_nn($inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_model='$inp_model'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_md1($inp1, $inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp1%' OR product_name_ina LIKE '%$inp1%') AND product_model='$inp_model'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function getDetail_mk_md($limit, $inp, $inp_make, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->where('product_model LIKE', '%'.$inp_model.'%')
						->where('product_name_eng LIKE', '%'.$inp.'%')
						->or_where('product_name_ina LIKE', '%'.$inp.'%')
						->limit($limit, $offset)
						->get();	
	}

	public function getDetail_mk_md_nn($limit, $inp_make, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->where('product_model LIKE', '%'.$inp_model.'%')
						->limit($limit, $offset)
						->get();
	}

	public function getDetail_mk_md1($limit, $inp1, $inp_make, $inp_model){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->where('product_make LIKE', '%'.$inp_make.'%')
						->where('product_model LIKE', '%'.$inp_model.'%')
						->where('product_name_eng LIKE', '%'.$inp1.'%')
						->or_where('product_name_ina LIKE', '%'.$inp1.'%')
						->limit($limit, $offset)
						->get();	
	}

	public function countDetail_mk_md($inp, $inp_make, $inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp%' OR product_name_ina LIKE '%$inp%') AND product_model='$inp_model' AND product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_mk_md_nn($inp_make, $inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE product_model='$inp_model' AND product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function countDetail_mk_md1($inp1, $inp_make, $inp_model){
		$query = $this->db->query("SELECT product_id FROM product WHERE (product_name_eng LIKE '%$inp1%' OR product_name_ina LIKE '%$inp1%') AND product_model='$inp_model' AND product_make='$inp_make'");
		if($query->num_rows() > 0){
			return $query->num_rows();
		} else {
			return false;
		}
	}

	public function getDataGeneral($limit, $uinp){
		$offset = $this->uri->segment(3);
		$table = "product";
		return $this->db->select('*')
						->from($table)
						->like('product_name_eng', $uinp)
						->or_like('product_name_ina', $uinp)
						->or_like('product_desc_eng', $uinp)
						->or_like('product_desc_ina', $uinp)
						->or_like('product_make', $uinp)
						->or_like('product_model', $uinp)
						/*->or_where('product_make LIKE', '%'.$uinp.'%')
						->or_where('product_model LIKE', '%'.$uinp.'%')
						->or_where('product_name_eng LIKE', '%'.$uinp.'%')
						->or_where('product_name_ina LIKE', '%'.$uinp.'%')
						->or_where('product_desc_eng LIKE', '%'.$uinp.'%')
						->or_where('product_desc_ina LIKE', '%'.$uinp.'%')*/
						->limit($limit, $offset)
						->get();
	}

	public function countDataGeneral($uinp){
		$this->db->or_where('product_make LIKE', '%'.$uinp.'%');
		$this->db->or_where('product_model LIKE', '%'.$uinp.'%');
		$this->db->or_where('product_name_eng LIKE', '%'.$uinp.'%');
		$this->db->or_where('product_name_ina LIKE', '%'.$uinp.'%');
		$this->db->or_where('product_desc_eng LIKE', '%'.$uinp.'%');
		$this->db->or_where('product_desc_ina LIKE', '%'.$uinp.'%');
		$query = $this->db->get('product');
		return $query->num_rows();
	}











	public function getData_detail1($pg, $limit, $inp){
		$offset = $this->uri->segment(3);
		if ($pg=="search_no_detail"){
			$table = "product";
			return $this->db->from($table)
							->limit($limit, $offset)
							->like('product_name_eng', $inp)
							->like('product_name_ina', $inp)
							->get();
		}
		if ($pg=="search_general"){
			$table = "product";
			return $this->db->from($table)
							->limit($limit, $offset)
							->like('product_name_eng', $inp)
							->like('product_name_ina', $inp)
							->like('product_desc_eng', $inp)
							->like('product_desc_ina', $inp)
							->like('product_make', $inp)
							->like('product_model', $inp)
							->get();
		}
	}

	public function countData($pg){
		if ($pg=="after_login"){
			$table = "products";
			return $this->db->count_all_results($table);
		}
	}

}
?>