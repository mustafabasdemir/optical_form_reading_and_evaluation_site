<?php
class fakulteyukleModel extends CI_Model
{
	function select()
	{

	}

	function insert($data)
	{
		$this->db->insert_batch('fakulte_bolum', $data);
	}
}
