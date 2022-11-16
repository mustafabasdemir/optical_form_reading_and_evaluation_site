<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cevapanahtariyukle extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cevapanahtariyukleModel');
		$this->load->library('excel');
	}



	function import()
	{
		$ders_ad = $this->input->post("uzemders");
		$kitapcikTur = $this -> input ->post("kturu");

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
					$tc = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$s1 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$s2 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$s3 = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$s4 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$s5 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$s6 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$s7 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$s8 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$s9 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$s10 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$s11 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$s12 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					$s13 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
					$s14 = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
					$s15 = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
					$s16 = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
					$s17 = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
					$s18 = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
					$s19 = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
					$s20 = $worksheet->getCellByColumnAndRow(20, $row)->getValue();



					$data[] = array(
						'tc'   => $tc,
						'ders_ad'  => $ders_ad,
						'kitapcikTur'=>$kitapcikTur,
						's1'=>$s1,
						's2'=>$s2,
						's3'=>$s3,
						's4'=>$s4,
						's5'=>$s5,
						's6'=>$s6,
						's7'=>$s7,
						's8'=>$s8,
						's9'=>$s9,
						's10'=>$s10,
						's11'=>$s11,
						's12'=>$s12,
						's13'=>$s13,
						's14'=>$s14,
						's15'=>$s15,
						's16'=>$s16,
						's17'=>$s17,
						's18'=>$s18,
						's19'=>$s19,
						's20'=>$s20,
					);
				}
			}
			$this->cevapanahtariyukleModel->insert($data);
			echo 'Cevap Anahtarları Yükleme İşlemi Tamamlandı.';
		}
	}
}

?>
