<?php 
class Model_basic extends CI_Model
{
	public function getData($tablename,$conditions)
	{
		if(!empty($conditions))
		{
			$this->db->where($conditions);
		}
		return $this->db->get($tablename)->result();
	}
	function insertData($tablename,$data)
	{
		$this->db->insert($tablename,$data);
	}
	public function deleteData($tablename,$conditions)
	{
		$this->db->delete($tablename,$conditions);
	}
	
	public function updateData($tablename,$data,$conditions)
	{
		$this->db->where($conditions);
		$this->db->update($tablename,$data);
	}
	
	public function query($text)
	{
		
		return  $this->db->query($text);
	}
}
?>