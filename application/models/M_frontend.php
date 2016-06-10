<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Frontend extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function set_session(){
		$user_session = array(
			'user_register' => 'no',
			'user_login' => 'no',
			'user_lang' =>'ina'
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
	
	public function getData($tablename,$conditions)
	{
		if(!empty($conditions))
		{
			$this->db->where($conditions);
		}
		return $this->db->get($tablename)->result();
	}
}
?>