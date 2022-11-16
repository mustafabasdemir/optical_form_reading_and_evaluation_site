
<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{

		$query = $this->db->get("exceldok");
		return $query->result();
	}


}
