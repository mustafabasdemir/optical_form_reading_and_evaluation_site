<?php
class cevapanahtariyukleModel extends CI_Model
{
	function select()
	{

	}

	function insert($data)
	{
		$this->db->insert_batch('cevap_anahtar', $data);
	}
}
