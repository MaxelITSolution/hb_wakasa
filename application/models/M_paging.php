<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Paging extends CI_Model
{

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