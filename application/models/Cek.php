<?php
class Cek extends CI_Model
{
	public function check_data($data)
	{
		//print_r($data);

		$datax = $this->db->query("SELECT * FROM pengguna");
		$row = $datax->row();
		print_r($row);
		echo "bisa";
		return 0;
	}
	public function insert_data($data)
	{
		$this->db->insert('user',$data);
		//print_r($data);
		return 1;
		
	}
}
?>