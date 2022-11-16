<?php
class LiveTable_model extends CI_Model
{

	/// fakulte ve bolumlerin kontrolü için
	function load_data()
	{
		$query = $this->db->get('fakulte_bolum');
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert('fakulte_bolum', $data);
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('fakulte_bolum', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fakulte_bolum');
	}
}
?>
