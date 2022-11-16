<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveTable extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('livetable_model');
	}

	function Fakulte_kontrol()
	{
		$this->load->view('fakulteControl');
	}

	function load_data()
	{
		$data = $this->livetable_model->load_data();
		echo json_encode($data);
	}

	function insert()
	{
		$data = array(
			'fakulte' => $this->input->post('fakulte'),
			'bolum'  => $this->input->post('bolum'),
			'bolum_tur'   => $this->input->post('bolum_tur')
		);

		$this->livetable_model->insert($data);
	}

	function update()
	{
		$data = array(
			$this->input->post('table_column') => $this->input->post('value')
		);

		$this->livetable_model->update($data, $this->input->post('id'));
	}

	function delete()
	{
		$this->livetable_model->delete($this->input->post('id'));
	}


}

?>
