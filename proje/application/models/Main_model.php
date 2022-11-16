<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

	// fakulte
    function fakulte($fakulte=""){

		$this->db->distinct('fakulte');
		$this->db->select('fakulte');
        $this->db->where("fakulte like '%".$fakulte."%' ");
        $fetched_records = $this->db->get('ogrencicevaplar');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach($users as $user){
            $data[] = array("text"=>$user['fakulte'],"id"=>$user['fakulte']);
        }
        return $data;
    }

    ///// bolum
	function bolum($bolum="")
	{

		$this->db->distinct('bolum');
		$this->db->select('bolum');
		$this->db->where("bolum like '%".$bolum."%' ");
		$fetched_records = $this->db->get('ogrencicevaplar');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['bolum'],"id"=>$user['bolum']);
		}


		return $data;
	}

	///// ders
	function ders($ders="")
	{


		$this->db->distinct('ders_ad');
		$this->db->select('ders_ad');
		$this->db->where("ders_ad like '%".$ders."%' ");
		$fetched_records = $this->db->get('ogrencicevaplar');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['ders_ad'],"id"=>$user['ders_ad']);
		}


		return $data;
	}

	///// kitapcık türü
	function ktur($ktur="")
	{


		$this->db->distinct('kitapcikTur');
		$this->db->select('kitapcikTur');
		$this->db->where("kitapcikTur like '%".$ktur."%' ");
		$fetched_records = $this->db->get('ogrencicevaplar');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['kitapcikTur'],"id"=>$user['kitapcikTur']);
		}


		return $data;
	}



	//// DOSYA YÜKLEME EKRANI  CEVAP ANAHTARI AÇILIR  MENÜLER



	///// fakulte
	function fakulteyukkle($fakulteyukkle="")
	{

		$this->db->distinct('fakulte');
		$this->db->select('fakulte');
		$this->db->where("fakulte like '%".$fakulteyukkle."%' ");
		$fetched_records = $this->db->get('fakulte_bolum');
		$users = $fetched_records->result_array();

		// Initialize Array with fetched data
		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['fakulte'],"id"=>$user['fakulte']);
		}


		return $data;
	}


	///// bolum
	function bolumyukle($bolumyukle="")
	{

		$this->db->distinct('bolum');
		$this->db->select('bolum');
		$this->db->where("bolum like '%".$bolumyukle."%' ");
		$fetched_records = $this->db->get('fakulte_bolum');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['bolum'],"id"=>$user['bolum']);
		}


		return $data;
	}


     /////kitapçık türü
	function kturu($kturu="")
	{

		$this->db->select('*');
		$this->db->where("kturu like '%".$kturu."%' ");
		$fetched_records = $this->db->get('kturu');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['kturu'],"id"=>$user['kturu']);
		}


		return $data;
	}


	/////uzak dersler türü
	function uzemders($uzemders="")
	{
		$this->db->select('*');
		$this->db->where("dersAd like '%".$uzemders."%' ");
		$fetched_records = $this->db->get('uzakdersler');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['dersAd'],"id"=>$user['dersAd']);
		}


		return $data;
	}


	//// MAİL GÖNDERİMİ İÇİN

	function mailAtma($mailAtma="")
	{

		$this->db->select('*');
		$this->db->where("ad like '%".$mailAtma."%' ");
		$fetched_records = $this->db->get('ogr_gorevlileri');
		$users = $fetched_records->result_array();

		$data = array();
		foreach($users as $user){
			$data[] = array("text"=>$user['ad'],"id"=>$user['ad']);
		}


		return $data;
	}
}


