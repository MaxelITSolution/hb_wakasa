<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model
{

	public function load($table){
		if ($table == "products"){
			$query = $this->db->query('SELECT * FROM products WHERE is_active=1');
			return $query;
		}
	}

	public function insert($table, $data){
		if($table == "product"){
			if($this->db->insert('products', $data))
				return true;
		}
	}

	public function delete($table, $id, $data){
		if ($table=="products"){
			$this->db->where('id', $id);
			$this->db->update('products', $data);
		}
	}

	public function load_du($table, $id){
		if ($table=="product"){
			$query = $this->db->query("SELECT * FROM products WHERE id='$id' AND is_active=1");
			return $query;
		}
	}

	public function update($table, $id, $data){
		if ($table=="product"){
			$this->db->where('id', $id);
			$this->db->update('products', $data);
		}
	}

}
?>