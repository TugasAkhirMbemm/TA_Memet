<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_anak extends CI_Controller {

	function __construct()
    {
	parent::__construct();
      $this->load->model('data_model');
    	$this->load->model('core');
    }
	public function index(){

	}
	public function t_entri_data_anak(){
		if(isset($_POST['btnSimpan'])){
        $lama_dalam_kandungan = $this -> input -> post('lama_kandungan');
        $keadaan_selama_dlm_kandungan = $this -> input -> post('keadaan_dalam_kandungan');
        $keadaan_lahir = $this -> input -> post('keadaan_lahir');
        $proses_kelahiran = $this -> input -> post('proses_kelahiran');
        $yang_membantu_kelahiran = $this -> input -> post('membantu_kelahiran');
        $berat_panjang_ketika_lahir = $this -> input -> post('berat_panjang');
        $apgar_score = $this -> input -> post('apgar_score');
        $usia_ibu_ketika_anak_lahir = $this -> input -> post('usia_ibu');
        $data = array(
          'id_siswa' => 2,
          'lama_dalam_kandungan' =>$lama_dalam_kandungan,
          'keadaan_dalam_kandungan' =>$lama_dalam_kandungan,
          'keadaan_lahir' =>$lama_dalam_kandungan,
          'proses_kelahiran' =>$lama_dalam_kandungan,
          'yang_membantu_kelahiran' =>$lama_dalam_kandungan,
          'berat_panjang_ketika_lahir' =>$lama_dalam_kandungan,
          'apgar_score' =>$lama_dalam_kandungan,
          'usia_ibu_ketika_lahir' =>$lama_dalam_kandungan 
        );
        $insert_data = $this->db->insert('kelahiran_anak',$data);

        $berat_badan = $this -> input -> post ('berat_badan');
       	$tinggi_badan = $this -> input -> post ('tinggi_badan');
        $gol_darah = $this -> input -> post ('gol_darah');
        $lama_masa_minum_asi = $this -> input -> post ('lama_minum_asi');
        $perkembangan_2_bulan = $this -> input -> post ('perkembangan');
        $kelainan_tubuh = $this -> input -> post ('kel_dalam_tubuh');
        $makan_tambahan_2_bulan = $this -> input -> post ('makan_tambahan');
        $imunisasi = $this -> input -> post ('imunisasi');
        $alergi = $this -> input -> post ('alergi');
        $penglihatan = $this -> input -> post ('penglihatan');
        $pendengaran = $this -> input -> post ('pendengaran');
        $penampilan = $this -> input -> post ('penampilan'); 
        $data1 = array(
        'id_siswa'=> 2,
        'berat_badan'=>$berat_badan,
        'tinggi_badan' => $tinggi_badan,
        'id_golongan_darah'=>$gol_darah,
        'minum_asi_selama'=>$lama_masa_minum_asi,
        'perkembangan_dalam_2bulan'=>$perkembangan_2_bulan,
        'kelainan_dalam_tubuh'=>$kelainan_tubuh,
        'makanan_tambahan_kurang_dari_2bulan '=>$makan_tambahan_2_bulan,
        'imunisasi_yang_diberikan'=>$imunisasi,
        'alergi_makanan_dan_obat'=>$alergi,
        'penglihatan'=>$penglihatan,
        'pendengaran'=>$pendengaran,
        'penampilan'=>$penampilan
        );
        $insert_data1 = $this->db->insert('kesehatan_anak',$data1);

        $ciri_fisik = $this -> input -> post ('ciri_fisik');
        $ciri_kepribadian = $this -> input -> post ('ciri_kepribadian');
        $bakat_khusus = $this -> input -> post ('bakat');
        $prestasi = $this -> input -> post ('presatsi');
        $data2 = array(
        'id_siswa'=> 2,
        'ciri_fisik_yang_menonjol'=>$ciri_fisik,
        'ciri_kepribadian_yang_menonjol'=>$ciri_kepribadian,
        'bakat_khusus_yang_menonjol'=>$bakat_khusus,
        'prestasi_yang_pernah_diraih'=>$prestasi
        );
        $insert_data2 = $this->db->insert('ciri_khas_anak',$data2);
 
      if ($insert_data && $insert_data1 && $insert_data2  >= 0) {
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
