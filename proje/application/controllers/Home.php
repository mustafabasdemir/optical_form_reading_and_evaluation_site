<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');

		$this->load->helper('url');
		$this->load->model('Main_model');

		$this->load->model('livetable_model');
		$this->load->model('cvpTabloModel');
		$this->load->model('ogrKontrolModel');
	}


	public function bosAc()
	{
		$this->load->view('bossayfaa');
	}

	public function index()
	{
	   // echo "merhaba";

		$this->load->view('dosyayukle');
	}


	public function analizAc()
	{

		// echo "merhaba";
		//$this->load->view('analiz');

		redirect('home/analizVeriAl');
	}

	public function dosyayukle()
	{
		// echo "merhaba";
		$this->load->view('dosyayukle');
	}

	public function analizVeriAl()
	{
		/*
		Excel ve pdf  verisi almak için veritabanı temziliği
		 */

		$exceldok=$this->db->get("exceldok")->result();
		$pdfdok=$this->db->get("pdfdok")->result();
		$veriYedek=$this->db->get("veriyedek")->result();


		foreach ($exceldok as $row)
		{
			$i=$row->id;
			$this->db->where("id",$i)->delete("exceldok");
			//echo $i;
		}
		foreach ($pdfdok as $row)
		{
			$i=$row->id;
			$this->db->where("id",$i)->delete("pdfdok");
			//echo $i;
		}



		$fakulte=$this->input->post("fakulte");
		$bolum = $this->input->post("bolum");
		$ders = $this->input->post("ders");
		$kitapcik = $this -> input ->post("kitapcik");
		//print_r($_POST);

		// sorgu
		$sorguCevaplar = Array("fakulte"=>$fakulte,"bolum"=>$bolum , "ders_ad"=>$ders, "kitapcikTur"=>$kitapcik);
		$sorguCevapAnahtari = Array("ders_ad"=>$ders , "kitapcikTur"=>$kitapcik);

		//cevap anahtarı
		$optikcevapanahtari = $this->db->where($sorguCevapAnahtari)->get("cevap_anahtar")->result();

		//verilen cevaplar
		$optikcevaplar = $this->db->where($sorguCevaplar)->get("ogrenciCevaplar")->result();

		// sayfaya veri gönderme
		$datagonder = array("optikcevapanahtari" => $optikcevapanahtari , "optikcevaplar" => $optikcevaplar ,"ders" => $ders, "bolum" => $bolum);
		$this->load->view("analiz", $datagonder);
		$this->load->model("Excel_export_model", $ders);
		//$this->load->views->veriTablo("analizVeri", $datagonder);
	}

	public function action()  //excel dökme
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("TC Kimlik No", "Fakülte", "Bölüm", "Ders Adı", "Kitapçık Türü","Soru 1","Soru 2","Soru 3","Soru 4","Soru 5","Soru 6","Soru 7","Soru 8","Soru 9","Soru 10","Soru 11","Soru 12","Soru 13","Soru 14","Soru 15","Soru 16","Soru 17","Soru 18","Soru 19","Soru 20","Puan");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;

		foreach($employee_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->tc);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->fakulte);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->bolum);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->ders_ad);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->kitapcikTur);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->s1);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->s2);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->s3);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->s4);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->s5);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->s6);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->s7);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->s8);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->s9);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->s10);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->s11);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->s12);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->s13);
			$object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->s14);
			$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->s15);
			$object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->s16);
			$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->s17);
			$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->s18);
			$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->s19);
			$object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->s20);
			$object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->puan);
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		#echo date('H:i:s') . " Write to Excel2007 format\n";
		ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="Employee Data.xls"');
		header('Content-Disposition: attachment;filename="veri.xls"');
		$object_writer->save('php://output');
	}


	//............:::::::::::.   verileri temizle menüsü  :::::::::..........//


	public function fakulteSil()
	{
		/*
		Verileri Temizleme İşlemi
		 */
		$fakulte=$this->db->get("fakulte_bolum")->result();


		foreach ($fakulte as $row)
		{
			$i=$row->id;
			$this->db->where("id",$i)->delete("fakulte_bolum");
		}

		echo '<script type="text/javascript">';
		echo ' alert("Fakülte ve Bölümler Silindi. Analiz yapmak için -Dosya Yükle-  menüsünden gerekli verileri yükleyiniz.")';  //not showing an alert box.
		echo '</script>';

		$this->load->view("dosyayukle");

	}


	public function cevapAnahtariSil()
	{
		/*
		Verileri Temizleme İşlemi
		 */

		$cevapanahtari=$this->db->get("cevap_anahtar")->result();

		foreach ($cevapanahtari as $row)
		{
			$i=$row->id;
			$this->db->where("id",$i)->delete("cevap_anahtar");
		}

		echo '<script type="text/javascript">';
		echo ' alert("Cevap Anahtarları Silindi. Analiz yapmak için -Dosya Yükle-  menüsünden gerekli verileri yükleyiniz.")';  //not showing an alert box.
		echo '</script>';

		$this->load->view("dosyayukle");

	}


	public function cevaplariSil()
	{
		/*
		Verileri Temizleme İşlemi
		 */
		$ogrenciCevaplar=$this->db->get("ogrencicevaplar")->result();


		foreach ($ogrenciCevaplar as $row)
		{
			$i=$row->id;
			$this->db->where("id",$i)->delete("ogrenciCevaplar");
		}


		echo '<script type="text/javascript">';
		echo ' alert("Cevaplar Silindi. Analiz yapmak için  menüsünden gerekli verileri yükleyiniz.")';  //not showing an alert box.
		echo '</script>';

		$this->load->view("dosyayukle");

	}


	/////  DOSYA YÜKLEME EKRANI  CEVAP ANAHTARI YÜKLE  AÇILIR EKRANLAR

	public function kturu()
	{
		$kturu = $this->input->post('kturu');

		// Get users
		$response = $this->Main_model->kturu($kturu);
		echo json_encode($response);
	}


	public function uzemders()
	{
		$uzemders = $this->input->post('uzemders');

		// Get users
		$response = $this->Main_model->uzemders($uzemders);
		echo json_encode($response);
	}


	/////  DOSYA YÜKLEME EKRANI  DOSYA YÜKLE  AÇILIR EKRANLAR

	public function fakultecevap()
	{

		$fakultecevap = $this->input->post('fakultecevap');

		// Get users
		$response = $this->Main_model->fakulteyukkle($fakultecevap);
		echo json_encode($response);
	}


	public function bolumcevap()
	{

		$bolumcevap = $this->input->post('bolumcevap');

		// Get users
		$response = $this->Main_model->bolumyukle($bolumcevap);
		echo json_encode($response);
	}


	public function uzemcevap()
	{
		$uzemcevap = $this->input->post('uzemcevap');

		// Get users
		$response = $this->Main_model->uzemders($uzemcevap);
		echo json_encode($response);
	}


	public function kturucevap()
	{
		$kturucevap= $this->input->post('kturucevap');

		// Get users
		$response = $this->Main_model->kturu($kturucevap);
		echo json_encode($response);
	}



	//ANALİZ EKRANI FAKULTE VE BOLUMLERİN AÇILIR LİSTELERİ

	public function fakulte()
	{

		// Search term
		$fakulte = $this->input->post('$fakulte');

		// Get users
		$response = $this->Main_model->fakulte($fakulte);

		echo json_encode($response);
	}

	public function bolum()
	{


		// Search term
		$bolum = $this->input->post('bolum');

		// Get users
		$response = $this->Main_model->bolum($bolum);
		echo json_encode($response);
	}

	public function ders()
	{
		// Search term
		$ders = $this->input->post('ders');

		// Get users
		$response = $this->Main_model->ders($ders);
		echo json_encode($response);
	}

	public function ktur()
	{
		// Search term
		$ktur = $this->input->post('ktur');

		// Get users
		$response = $this->Main_model->ktur($ktur);
		echo json_encode($response);
	}

	////// MAİL GÖNDERME İÇİN

	public function mailAtma()
	{


		// Search term
		$mailAtma = $this->input->post('mailAtma');

		// Get users
		$response = $this->Main_model->mailAtma($mailAtma);
		echo json_encode($response);
	}  // mail atma acılır menüdeki form name


////// fakulte Bolum Kontrol /////

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



	///CEVAP ANAHTARI KONTROLÜ İÇİN  /////


	function cevapAnahtariKontrol()
	{
		$this->load->view('cevapAnahtariKontrol');
	}

	function cvp_load_data()
	{
		$data = $this->cvpTabloModel->load_data();
		echo json_encode($data);
	}

	function cvp_insert()
	{
		$data = array(
			'tc' => $this->input->post('tc'),
			'ders_ad'   => $this->input->post('ders_ad'),
			'kitapcikTur'   => $this->input->post('kitapcikTur'),
			's1'   => $this->input->post('s1'),
			's2'   => $this->input->post('s2'),
			's3'   => $this->input->post('s3'),
			's4'   => $this->input->post('s4'),
			's5'   => $this->input->post('s5'),
			's6'   => $this->input->post('s6'),
			's7'   => $this->input->post('s7'),
			's8'   => $this->input->post('s8'),
			's9'   => $this->input->post('s9'),
			's10'   => $this->input->post('s10'),
			's11'   => $this->input->post('s11'),
			's12'   => $this->input->post('s12'),
			's13'   => $this->input->post('s13'),
			's14'   => $this->input->post('s14'),
			's15'   => $this->input->post('s15'),
			's16'   => $this->input->post('s16'),
			's17'   => $this->input->post('s17'),
			's18'   => $this->input->post('s18'),
			's19'   => $this->input->post('s19'),
			's20'   => $this->input->post('s20'),
		);

		$this->cvpTabloModel->insert($data);
	}

	function cvp_update()
	{
		$data = array(
			$this->input->post('table_column') => $this->input->post('value')
		);

		$this->cvpTabloModel->update($data, $this->input->post('id'));
	}

	function cvp_delete()
	{
		$this->cvpTabloModel->delete($this->input->post('id'));
	}


	//////OGRETİM GÖREVLİSİ EKLEME

	function ogr_kontrol()
	{
		$this->load->view('ogretmenKontrol');
	}

	function ogr_load_data()
	{
		$data = $this->ogrKontrolModel->load_data();
		echo json_encode($data);
	}

	function ogr_insert()
	{
		$data = array(
			'ad' => $this->input->post('ad'),
			'mail'  => $this->input->post('mail')
		);

		$this->ogrKontrolModel->insert($data);
	}

	function ogr_update()
	{
		$data = array(
			$this->input->post('table_column') => $this->input->post('value')
		);

		$this->ogrKontrolModel->update($data, $this->input->post('id'));
	}

	function ogr_delete()
	{
		$this->ogrKontrolModel->delete($this->input->post('id'));
	}

	function mailAt()
	{

		$ogrAd=$this->input->post("mailAtma");    //mail için verileri aldık
		$metinKutusu=$this->input->post("metinKutu");
		$mailAmac=$this->input->post("secim");
		//echo $ogrAd,$metinKutusu,$mailAmac;


		//kalan gecen bilgileri
		$kalangecen = $this->db->get("sayacveri")->result();
		foreach ($kalangecen as $kalangcn)
		{
			$kişiSayisi="Sınava Giren Kişi Sayısı : ".$kalangcn->sinavagiren;
			$basarili="Sınavda başarılı Kişi Sayısı : ".$kalangcn->basarili;
			$basarisiz="Sınava başarısız Kişi Sayısı : ".$kalangcn->basarisiz;

		}


		//gelen verilere göre sorgu
		$bilgi = $this->db->where("ad", $ogrAd)->get("ogr_gorevlileri")->result();
		foreach ($bilgi as $bilgiler)
		{
			//echo $bilgiler->mail;
			$gonderilecekMail=$bilgiler->mail;
		}


		//gonderilecek cevap anahtarı ve sorular
		$notlar=$this->db->get("pdfdok")->result();

		////// PHP DEĞİŞKENİNE HTML KOYMA


		$tablo= <<<EOF
		<table border="1" width="100%" id="table1">
		<tr>
		    <th>tc</th>
			<th>Fakülte</th>
			<th>Bölüm</th>
			<th>Ders Adı</th>
			<th>Kitapçık türü</th>
			<th>1.S</th>
			<th>2.S</th>
			<th>3.S</th>
			<th>4.S</th>
			<th>5.S</th>
			<th>6.S</th>
			<th>7.S</th>
			<th>8.S</th>
			<th>9.S</th>
			<th>10.S</th>
			<th>11.S</th>
			<th>12.S</th>
			<th>13.S</th>
			<th>14.S</th>
			<th>15.S</th>
			<th>16.S</th>
			<th>17.S</th>
			<th>18.S</th>
			<th>19.S</th>
			<th>20.S</th>
			<th>Puan</th>
		</tr>
		<tr>
       </thead>
      <tbody>
EOF;
		foreach ($notlar as $not)
		{
			$tablo .= <<<EOF
            <tr>
		<td>$not->tc</td>
		<td>$not->fakulte</td>
		<td>$not->bolum</td>
		<td>$not->ders_ad</td>
		<td>$not->kitapcikTur</td>
		<td>$not->s1</td>
		<td>$not->s2</td>
		<td>$not->s3</td>
		<td>$not->s4</td>
		<td>$not->s5</td>
		<td>$not->s6</td>
		<td>$not->s7</td>
		<td>$not->s8</td>
		<td>$not->s9</td>
		<td>$not->s10</td>
		<td>$not->s11</td>
		<td>$not->s12</td>
		<td>$not->s13</td>
		<td>$not->s14</td>
		<td>$not->s15</td>
		<td>$not->s16</td>
		<td>$not->s17</td>
		<td>$not->s18</td>
		<td>$not->s19</td>
		<td>$not->s20</td>
		<td>$not->puan</td>
		
		</tr>
EOF;
		}

	   $tablo .= "</tbody></table>";

		//mesaj

		if($mailAmac=="Notları Gönder")
		{
			$mesaj=$metinKutusu."<br> ".$kişiSayisi."<br> ".$basarili." <br> ".$basarisiz." <br> ".$tablo;  // <========

		}
		else
		{
			$aciklama="AÇIKLAMA";
			$mesaj=$aciklama."<br> ".$metinKutusu."<br> ";
		}


		$config=array(
			"protocol"=>"smtp",
			"smtp_host"=>"ssl://smtp.gmail.com",
			"smtp_port"=>"465",
			"smtp_user"=>"basdemir803@gmail.com",
			"smtp_pass"=>"rtphafzhayyaoqxz",
			"starttls"=>true,
			"charset"=>"utf-8",
			"mailtype"=>"html",
			"wordwrap"=>true,
			"newline"=>"\r\n",
		);


		$this->load->library('email',$config);

		$this->email->from("basdemir803@gmail.com","Mustafa Başdemir");
		$this->email->to($gonderilecekMail);
		$this->email->subject("codeigniter projesi ile gönderildi");
		$this->email->message($mesaj);

		$send=$this->email->send();
		if($send)
		{

			echo '<script>alert("Mail Gönderme İşlemi Tamamlandı")</script>';
			sleep(2);
			$this->dosyayukle();
		}
		else
		{
			echo '<script>alert("Mail Gönderme İşlemi Başarısız")</script>';
		}

	}

//// txt oku sayfa acma ve okuma yeri //////

	public function txtSayfaAc()
	{
		$this->load->view('txtOku');
	}

	public function fakultetxt()
	{

		// dosya yükleme
		$config['upload_path'] = 'yukle';
		$config['allowed_types']='txt';
		$config['file_name']='fakulte';


		$this->load->library("upload",$config);

		if(!$this->upload->do_upload("fakultefile"))
		{

			echo $this->upload->display_errors();

			echo '<script type="text/javascript">';
			echo ' alert("Yükleme Sırasında hata meydana geldi bilgilendirme metnini okuyunuz..")';  //not showing an alert box.
			echo '</script>';

		}else
		{


			$file=fopen('C:\xampp\htdocs\proje\yukle\fakulte.txt', "r");

			$sayac=1;
			while($sayac<=138)  //proje cekim amaclı sonra yükleme için !feof(file) yap
			{
				$content=fgets($file);
				$carray=explode("-", $content);
				//echo "<pre>";
				//print_r($carray);


			$gonerilecekveri  = array(

				"fakulte " => $carray[0],
				"bolum " => $carray[1],
				"bolum_tur " => $carray[2],
			);

				$insert =  $this ->db ->insert("fakulte_bolum",$gonerilecekveri);

			$sayac++;
			}
			fclose($file);

			echo '<script type="text/javascript">';
			echo ' alert("Yükleme işlemi Tamamlandı.")';  //not showing an alert box.
			echo '</script>';

			$this->index();
		}

		}























































//	public  function distincKullanımı()
//	{
//		$sql  = 'SELECT DISTINCT fakulte FROM fakulte_bolum';
//
//		$this->db->distinct('fakulte');
//		$this->db->select('fakulte');
//		$rows=$this->db->get('fakulte_bolum')->result_array();
//
//		print_r($rows);
//
//	}
//
//	public function deneme()
//	{
//		$this->load->view('analizSayac');
//	}
//
//	public  function verisayfasiAc()
//	{
//		//$this->load->view('veri');
//		redirect('home/dbislem');
//
//	}
//
//
//	public function giris()
//    {
//        $this->load->view('giris');
//    }
//
//	public function kisikayit()
//	{
//		$this->load->view("kisikayit");
//	}
//
//
//	public function guncellemeAc()
//	{
//		//$this->load->view("guncelle");
//		redirect('home/guncellemeIslemleri');
//	}
//
//
//	public function silAc()
//	{
//		//$this->load->view("sil");
//		redirect('home/silmeIslemleri');
//	}
//
//
//    //...:::::::::::::::::::::::::::  VERİ ALMA VE VERİTABANI İŞLEMLERİ ::::::::::::::...........
//
//    public function formkontrol()
//    {
//
//       $kullaniciadi = $this->input->post("kullaniciadi");
//       $sifre =  $this -> input ->post("sifre");
//
//       echo  "kullanici adi      :".$kullaniciadi;
//       echo  "şifre    : ".$sifre;
//
//    }
//
//
//    public function dbislem()
//	{
//		//echo "Veritabanı baglantı denemesi </br> ";
//
//		$rows = $this->db->get('giris')->result_array();
//		//print_r($rows);
//
//		// koşullu select
//		$kosul = $this->db->where("kullaniciad", "mustafa")->get("giris")->result();
//		//print_r($kosul);
//
//		//tabloya veri yazmak için sorgu
//		$tabloverisi = $this->db->get("giris")->result();
//
//
//		// sayfaya veri gönderme
//		$datagonder = array("rows" => $rows, "kosul" => $kosul, "tabloverisi" => $tabloverisi);
//		$this->load->view("veri", $datagonder);
//
//	}
//
//
//	public function kisikayitveriekle()
//	{
//		//echo "calısıyor";
//
//
//		$kullaniciadi = $this->input->post("kullaniciad");
//		$sifre = $this->input->post("sifre");
//
//		//echo  $sifre,$kullaniciadi;
//
//		$gonerilecekveri  = array(
//			"kullaniciad" => $kullaniciadi,
//			"sifre" => $sifre
//			);
//
//
//		$insert =  $this ->db ->insert("giris",$gonerilecekveri);
//
//
//		}
//
//
//		public function guncellemeIslemleri()
//		{
//			//tabloya veri yazmak için
//
//			$tabloverisi = $this->db->get("giris")->result();
//
//
//			$id =  $this -> input ->post("id");
//			$kullaniciad =  $this -> input ->post("kullaniciad");
//			$sifre =  $this -> input ->post("sifre");
//
//
//
//			$data  = array(
//
//				"kullaniciad" => $kullaniciad,
//				"sifre" => $sifre
//
//			);
//
//			if($kullaniciad != null && $sifre != null)
//			{
//				$guncelle =  $this->db->where("id",$id)->update("giris",$data);
//				$bilgi = "Güncelleme işlemi yapıldı";
//			}
//			else if($kullaniciad == null && $sifre == null)
//			{
//				$bilgi = "Kullanıcı adı ve parola kısmını boş bırakmayın";
//			}
//
//
//
//
//			// sayfaya veri gönderme
//			$datagonder = array("bilgi" => $bilgi,"tabloverisi" => $tabloverisi);
//			$this->load->view("guncelle", $datagonder);
//
//		}
//
//
//		public function silmeIslemleri()
//		{
//
//			//tablo olusturmak için
//			$tabloverisi = $this->db->get("giris")->result();
//
//			$id =  $this -> input ->post("id");
//			$kullaniciad =  $this -> input ->post("kullaniciad");
//			$sifre =  $this -> input ->post("sifre");
//
//			$sil =  $this->db->where("id",$id)->delete("giris");
//			$bilgi = "silme işlemi yapıldı";
//
//			// sayfaya veri gönderme
//			$datagonder = array("bilgi" => $bilgi,"tabloverisi" => $tabloverisi);
//			$this->load->view("sil", $datagonder);
//		}
//
//
//
//	public function toplamaislemi()
//    {
//        $this->load->library("fonksiyondeneme.php");
//        echo  $this->fonksiyondeneme->topla(9,10);
//    }
//



}
