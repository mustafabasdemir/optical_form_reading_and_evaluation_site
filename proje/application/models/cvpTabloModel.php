<?php
class cvpTabloModel extends CI_Model
{
	/// CEVAP ANAHTARI İÇİN
	///
	function load_data()
	{
		$query = $this->db->get('cevap_anahtar');
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert('cevap_anahtar', $data);
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('cevap_anahtar', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('cevap_anahtar');
	}
}
