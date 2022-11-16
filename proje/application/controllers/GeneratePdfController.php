<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller {

	function index()
	{

		$pdfdok=$this->db->get("exceldok")->result();



		foreach ($pdfdok as $row)
		{
			$a=$row->fakulte;
			$b=$row->ders_ad;
			$c=$row->bolum;
			$d=$row->kitapcikTur;
		}


		$fakulte=$this->input->post("fakulte");
		$bolum = $this->input->post("bolum");
		$ders = $this->input->post("ders");
		$kitapcik = $this -> input ->post("kitapcik");
		print_r($_POST);

		// sorgu
		$sorguCevaplar = Array("fakulte"=>$a,"bolum"=>$c , "ders_ad"=>$b, "kitapcikTur"=>$d);
		$sorguCevapAnahtari = Array("ders_ad"=>$b , "kitapcikTur"=>$d);


		//cevap anahtarı
		$optikcevapanahtari = $this->db->where($sorguCevapAnahtari)->get("cevap_anahtar")->result();

		//verilen cevaplar
		$optikcevaplar = $this->db->where($sorguCevaplar)->get("ogrenciCevaplar")->result();

		// sayfaya veri gönderme
		$datagonder = array("optikcevapanahtari" => $optikcevapanahtari , "optikcevaplar" => $optikcevaplar ,"ders" => $ders, "bolum" => $bolum);
		//$this->load->view("analiz", $datagonder);


		$this->load->library('pdf');
		$html = $this->load->view('analizVeri',$datagonder, true);
		$this->pdf->createPDF($html, 'mypdf', false);
	}
}
?>
