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
	public function login_user($uname, $pass){
		$this->db->where("reseller_email", $uname);
		$this->db->where("reseller_password", $pass);
		$this->db->where("reseller_isactive", 1);
		$query = $this->db->get("reseller");
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$login = $row->reseller_username;
			}
			$this->session->set_userdata('user_name', $login);
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
		if ($table=="content"){
			$query = $this->db->query('SELECT * FROM content');
			return $query;	
		}
		if ($table=="unggulan"){
			$query = $this->db->query('SELECT p.* FROM product p, product_unggulan pu WHERE p.`product_id` = pu.`product_id`');
			return $query;	
		}
		if ($table=="all_product"){
			$query = $this->db->query('SELECT * FROM product WHERE product_isactive = 1');
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
		if ($table=="content"){
			$query = $this->db->query("SELECT * FROM content WHERE id='" .$id. "'");
			return $query;
		}
		if ($table=="get_umail"){
			$query = $this->db->query("SELECT reseller_email FROM reseller WHERE reseller_id = '".$id."'");
			return $query;
		}
		if ($table=="get_uname"){
			$query = $this->db->query("SELECT reseller_uname FROM reseller WHERE reseller_id = '".$id."'");
			return $query;
		}
	}

	public function getImage($page){
		$query = $this->db->query("SELECT image FROM banner WHERE page='$page'");
		return $query;
	}

	public function get_admin_mail(){
		$query = $this->db->query("SELECT * FROM admin_mail WHERE admin_email_id=1");
		return $query;
	}

	public function load_admin_mail($get){
		if ($get=="email"){
			$query = $this->db->query("SELECT admin_email_address FROM admin_mail");
			return $query;
		}
		if ($get=="password"){
			$query = $this->db->query("SELECT admin_email_password FROM admin_mail");
			return $query;
		}
		if ($get=="name"){
			$query = $this->db->query("SELECT admin_email_Name FROM admin_mail");
			return $query;
		}
		if ($get=="subject"){
			$query = $this->db->query("SELECT admin_email_subject FROM admin_mail");
			return $query;
		}
		if ($get=="message"){
			$query = $this->db->query("SELECT admin_email_message FROM admin_mail");
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
		if ($table == "content"){
			$this->db->where('id', $id);
			$this->db->update('content', $data);	
		}
		if ($table == "admin_mail"){
			$this->db->where('admin_email_id', $id);
			$this->db->update('admin_mail', $data);	
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

	public function update_unggulan($kd1, $kd2, $kd3, $kd4, $kd5, $kd6, $kd7, $kd8, $kd9, $kd10){
		$query1 = $this->db->query("UPDATE product_unggulan SET product_id='$kd1' WHERE id=1");
		$query2 = $this->db->query("UPDATE product_unggulan SET product_id='$kd2' WHERE id=2");
		$query3 = $this->db->query("UPDATE product_unggulan SET product_id='$kd3' WHERE id=3");
		$query4 = $this->db->query("UPDATE product_unggulan SET product_id='$kd4' WHERE id=4");
		$query5 = $this->db->query("UPDATE product_unggulan SET product_id='$kd5' WHERE id=5");
		$query6 = $this->db->query("UPDATE product_unggulan SET product_id='$kd6' WHERE id=6");
		$query7 = $this->db->query("UPDATE product_unggulan SET product_id='$kd7' WHERE id=7");
		$query8 = $this->db->query("UPDATE product_unggulan SET product_id='$kd8' WHERE id=8");
		$query9 = $this->db->query("UPDATE product_unggulan SET product_id='$kd9' WHERE id=9");
		$query10 = $this->db->query("UPDATE product_unggulan SET product_id='$kd10' WHERE id=10");
		return $query10;
		return $query9;
		return $query8;
		return $query7;
		return $query6;
		return $query5;
		return $query4;
		return $query3;
		return $query2;
		return $query1;
	}

	public function getImage_product(){
		$query = $this->db->query("SELECT image FROM banner WHERE page='product'");
		return $query;
	}

	public function banner($table){
		if ($table=="home"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='home'");
			return $query;
		}
		if ($table=="produk"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='product'");
			return $query;
		}
		if ($table=="general"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='general'");
			return $query;
		}
		if ($table=="kontak"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='kontak'");
			return $query;
		}
		if ($table=="reseller"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='reseller'");
			return $query;
		}
		if ($table=="temukan"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='temukan'");
			return $query;
		}
		if ($table=="tentang"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='tentang'");
			return $query;
		}
		if ($table=="karir"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='karir'");
			return $query;
		}
		if ($table=="login"){
			$query = $this->db->query("SELECT image FROM banner WHERE page='login'");
			return $query;
		}
	}

	public function update_banner($table, $data){
		if ($table=="home1"){
			$this->db->where('id', 1);
			$this->db->update('banner', $data);
		}
		if ($table=="home2"){
			$this->db->where('id', 2);
			$this->db->update('banner', $data);
		}
		if ($table=="home3"){
			$this->db->where('id', 3);
			$this->db->update('banner', $data);
		}
		if ($table=="home4"){
			$this->db->where('id', 4);
			$this->db->update('banner', $data);
		}
		if ($table=="home5"){
			$this->db->where('id', 5);
			$this->db->update('banner', $data);
		}
		if ($table=="product"){
			$this->db->where('page', 'product');
			$this->db->update('banner', $data);
		}
		if ($table=="general"){
			$this->db->where('page', 'general');
			$this->db->update('banner', $data);
		}
		if ($table=="kontak"){
			$this->db->where('page', 'kontak');
			$this->db->update('banner', $data);
		}
		if ($table=="reseller"){
			$this->db->where('page', 'reseller');
			$this->db->update('banner', $data);
		}
		if ($table=="temukan"){
			$this->db->where('page', 'temukan');
			$this->db->update('banner', $data);
		}
		if ($table=="tentang"){
			$this->db->where('page', 'tentang');
			$this->db->update('banner', $data);
		}
		if ($table=="karir"){
			$this->db->where('page', 'karir');
			$this->db->update('banner', $data);
		}
		if ($table=="login"){
			$this->db->where('page', 'login');
			$this->db->update('banner', $data);
		}
	}
}
?>