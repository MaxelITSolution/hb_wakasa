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
	}

	public function load($table){
		if ($table=="reseller_no_active"){
			$query = $this->db->query('SELECT * FROM reseller WHERE reseller_isactive=0');
			return $query;
		}
	}
}
?>