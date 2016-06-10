<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Frontend extends CI_Model
{
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
	}
}
?>