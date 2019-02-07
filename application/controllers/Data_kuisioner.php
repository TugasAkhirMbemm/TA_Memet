<?php
/**
 * 
 */
class Data_kuisioner extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
      	$this->load->model('data_model');
    	$this->load->model('core');
	}
	public function index(){

	}
	public function t_entri_data_kuisioner(){
		if (isset($_POST['btnSimpan'])) {
			$kuisoner_1 = $this -> input -> post('jawaban_1');
			$kuisoner_2 = $this -> input -> post('jawaban_2');
			$kuisoner_3 = $this -> input -> post('jawaban_3');
			$kuisoner_4 = $this -> input -> post('jawaban_4');
			$kuisoner_5 = $this -> input -> post('jawaban_5');
			$kuisoner_6 = $this -> input -> post('jawaban_6');
			$kuisoner_7 = $this -> input -> post('jawaban_7');
			$kuisoner_8 = $this -> input -> post('jawaban_8');
			$kuisoner_9 = $this -> input -> post('jawaban_9');
			$kuisoner_10 = $this -> input -> post('jawaban_10');
			$data = array(
				'id_siswa' => 2 ,
				'jawaban_soal_1' => $kuisoner_1,
				'jawaban_soal_2' => $kuisoner_2,
				'jawaban_soal_3' => $kuisoner_3,
				'jawaban_soal_4' => $kuisoner_4,
				'jawaban_soal_5' => $kuisoner_5,
				'jawaban_soal_6' => $kuisoner_6,
				'jawaban_soal_7' => $kuisoner_7,
				'jawaban_soal_8' => $kuisoner_8,
				'jawaban_soal_9' => $kuisoner_9,
				'jawaban_soal_10' => $kuisoner_10
			);
			$insert_data = $this->db->insert('kuisioner',$data);

			if ($insert_data >= 0) {
		      	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
		        header('location:'.base_url("Data_siswa"));
		       } else{
		       $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
		       header('location:'.base_url("Data_siswa"));
		       }
		    }else{
		      echo "gagal";
		    }
		}
	}