<?php
class cevaplariyukleModel extends CI_Model
{
	function select()
	{

	}

	function insert($data)
	{
		$this->db->insert_batch('ogrencicevaplar', $data);
	}
}
