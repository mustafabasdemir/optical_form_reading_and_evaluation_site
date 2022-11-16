<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fakulteyukle extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fakulteyukleModel');
		$this->load->library('excel');
	}



	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$fakulte = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$bolum = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$bolum_tur = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$data[] = array(
						'fakulte'   => $fakulte,
						'bolum'    => $bolum,
						'bolum_tur'  => $bolum_tur,
					);
				}
			}
			$this->fakulteyukleModel->insert($data);
			echo 'Fakülte ve Bölümleri Yükleme İşlemi Tamamlandı.';
		}
	}
}

?>
