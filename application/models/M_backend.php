<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Backend extends CI_Model
{
	public function login($uname, $pass){
		$this->db->where("admin_email", $uname);
		$this->db->where("admin_password", $pass);
		$this->db->where("admin_isactive", 1);
		$query = $this->db->get("administrator");
		if($query->num_rows()>0)
		{
			return true;
		}
		return false;
	}

	public function insert($table, $data){
		if ($table=="new_reseller"){
			if($this->db->insert('reseller', $data))
          		return true;
		}
		if ($table=="new_administrator"){
			if($this->db->insert('administrator', $data))
          		return true;
		}
	}

	public function load($table){
		if ($table=="reseller_no_active"){
			$query = $this->db->query('SELECT * FROM reseller WHERE reseller_isactive=0');
			return $query;
		}
		if ($table=="administrator"){
			$query = $this->db->query('SELECT * FROM administrator WHERE admin_isactive=1');
			return $query;	
		}
	}

	public function load_du($table, $id){
		if ($table=="administrator"){
			$query = $this->db->query("SELECT * FROM administrator WHERE admin_isactive=1 AND admin_id='" .$id. "'");
			return $query;
		}
		if ($table=="reseller"){
			$query = $this->db->query("SELECT * FROM reseller WHERE reseller_isactive=0 AND reseller_id='" .$id. "'");
			return $query;
		}
	}

	public function update($table, $data, $id){
		if($table == "administrator"){
			$this->db->where('admin_id', $id);
			$this->db->update('administrator', $data);
		}
		if ($table == "conf_reseller"){
			$this->db->where('reseller_id', $id);
			$this->db->update('reseller', $data);	
		}
	}

	public function delete($table, $data, $id){
		if($table == "administrator"){
			$this->db->where('admin_id', $id);
			$this->db->update('administrator', $data);
		}
	}
	
	function insertData($tablename,$data)
	{
		$this->db->insert($tablename,$data);
	}
	
	public function updateData($tablename,$data,$conditions)
	{
		$this->db->where($conditions);
		$this->db->update($tablename,$data);
	}
	
	public function getData($tablename,$conditions)
	{
		if(!empty($conditions))
		{
			$this->db->where($conditions);
		}
		return $this->db->get($tablename)->result();
	}
	public function DeleteData($tablename,$conditions)
	{
		$this->db->delete($tablename,$conditions);
	}
	public function GenerateID()
	{
		$this->db->select("max(product_id) as product_id");
		$this->db->from("product");
		return $this->db->get()->result();
	}
	public function getDate1()
	{
		return $this->db->query("select Curdate() as tanggal");
	}
	public function getTime()
	{
		return $this->db->query("select curtime() as time");
	}
}
?>