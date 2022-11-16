<?php
class ogrKontrolModel extends CI_Model
{
	/// ÖĞRETİM GÖREVLİLERİ İÇİN///

	function load_data()
	{
		$query = $this->db->get('ogr_gorevlileri');
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert('ogr_gorevlileri', $data);
	}

	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('ogr_gorevlileri', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('ogr_gorevlileri');
	}
}
