<?php
class M_frontend extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
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