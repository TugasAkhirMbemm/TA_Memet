<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_keluarga extends CI_Controller {

	function __construct()
    {
	parent::__construct();
      $this->load->model('data_model');
    	$this->load->model('core');
    }
	public function index(){

	}
	public function t_entri_data_keluarga(){
		if(isset($_POST['btnSimpan'])){
        $nama_ayah = $this -> input -> post ('nama_ayah');
       	$nama_ibu = $this -> input -> post ('nama_ibu');
        $agama_ayah = $this -> input -> post ('agama_ayah');
        $agama_ibu = $this -> input -> post ('agama_ibu');
        $tgl_lahir_ayah = $this -> input -> post ('tgl_lahir_ayah');
        $tgl_lahir_ibu = $this -> input -> post ('tgl_lahir_ibu');
        $kewarganegaraan_ayah = $this -> input -> post ('kewarganegraan_ayah');
        $kewarganegaraan_ibu = $this -> input -> post ('kewarganegraan_ibu');
        $pend_terakhir_ayah = $this -> input -> post ('pend_ayah');
        $pend_terakhir_ibu = $this -> input -> post ('pend_ibu');
        $jurusan_ayah = $this -> input -> post ('jurusan_ayah');
        $jurusan_ibu = $this -> input -> post ('jurusan_ibu');
        $instansi_ayah = $this -> input -> post ('instansi_ayah');
        $instansi_ibu = $this -> input -> post ('instansi_ibu');
        $pangkat_gol_ayah = $this -> input -> post ('pangkat_ayah');
        $pangkat_gol_ibu = $this -> input -> post ('pangkat_ayah');
        $lama_kerja_ayah = $this -> input -> post ('lama_kerja_ayah');
        $lama_kerja_ibu = $this -> input -> post ('lama_kerja_ibu');
        $penghasilan_ayah = $this -> input -> post ('penghasilan_ayah');
        $penghasilan_ibu = $this -> input -> post ('penghasilan_ibu');
        $tanggungan_ayah = $this -> input -> post ('tanggungan_ayah');
        $tanggungan_ibu = $this -> input -> post ('tanggungan_ibu');
        $alamat_rumah_ayah = $this -> input -> post ('alamat_ayah');
        $alamat_rumah_ibu = $this -> input -> post ('alamat_ibu');
        $alamat_kantor_ayah = $this -> input -> post ('al_kantor_ayah');
        $alamat_kantor_ibu = $this -> input -> post ('al_kantor_ibu');
        $no_telp_rumah_ayah = $this -> input -> post ('no_telp_rumah_ayah');
        $no_telp_rumah_ibu = $this -> input -> post ('no_telp_rumah_ibu');
        $no_telp_kantor_ayah = $this -> input -> post ('no_telp_kantor_ayah');
        $no_telp_kantor_ibu = $this -> input -> post ('no_telp_kantor_ibu');
        $lama_komunikasi_dengan_ayah = $this -> input -> post ('komunikasi_ayah');
        $lama_komunikasi_dengan_ibu = $this -> input -> post ('komunikasi_ibu');
        $data = array(
        'id_siswa'=> 2,
        'nama_ayah'=>$nama_ayah,
        'nama_ibu'=>$nama_ibu,
        'id_agama_ayah'=>$agama_ayah,
        'id_agama_ibu'=>$agama_ibu,
        'tanggal_lahir_ayah'=>$tgl_lahir_ayah,
        'tanggal_lahir_ibu'=>$tgl_lahir_ibu,
        'id_kewarganegaraan_ayah'=>$kewarganegaraan_ayah,
        'id_kewarganegaraan_ibu'=>$kewarganegaraan_ibu,
        'pendidikan_terakhir_ayah'=>$pend_terakhir_ayah,
        'pendidikan_terakhir_ibu'=>$pend_terakhir_ibu,
        'jurusan_yang_diambil_ayah'=>$jurusan_ayah,
        'jurusan_yang_diambil_ibu'=>$jurusan_ibu,
        'nama_instansi_ayah_bekerja'=>$instansi_ayah,
        'nama_instansi_ibu_bekerja'=>$instansi_ibu,
        'pangkat_golongan_ayah'=>$pangkat_gol_ayah,
        'pangkat_golongan_ibu'=>$pangkat_gol_ibu,
        'lama_kerja_ayah_perhari'=>$lama_kerja_ayah,
        'lama_kerja_ibu_perhari'=>$lama_kerja_ibu,
        'penghasilan_perbulan_ayah'=>$penghasilan_ayah,
        'penghasilan_perbulan_ibu'=>$penghasilan_ibu,
        'jumlah_tanggungan_ayah'=>$tanggungan_ayah,
        'jumlah_tanggungan_ibu'=>$tanggungan_ibu,
        'alamat_rumah_ayah'=>$alamat_rumah_ayah,
        'alamat_rumah_ibu'=>$alamat_rumah_ibu,
        'alamat_kantor_ayah'=>$alamat_kantor_ayah,
        'alamat_kantor_ibu'=>$alamat_kantor_ibu,
        'telp_rumah_hp_ayah'=>$no_telp_rumah_ayah,
        'telp_rumah_hp_ibu'=>$no_telp_rumah_ibu,
        'telp_kantor_ayah'=>$no_telp_kantor_ayah,
        'telp_kantor_ibu'=>$no_telp_kantor_ibu,
        'kesempatan_berkomunikasi_dg_ayah'=>$lama_komunikasi_dengan_ayah,
        'kesempatan_berkomunikasi_dg_ibu'=>$lama_komunikasi_dengan_ibu,
        );
        $insert_data = $this->db->insert('keluarga',$data);

        $nama_saudara_kandung = $this -> input -> post ('nama_sdr_kandung');
        $jk_saudara_kandung = $this -> input -> post ('jenis_kelamin');
        $pend_saudara_kandung = $this -> input -> post ('pend_sdr_kandung');
        $kelas_saudara_kandung = $this -> input -> post ('kls_sdr_kandung');
        $no_induk_saudara_kandung = $this -> input -> post ('no_induk_sdr_kandung');
        $data1 = array(
        'id_siswa'=> 2,
        'nama_saudara_kandung'=>$nama_saudara_kandung,
        'id_jenis_kelamin'=>$jk_saudara_kandung,
        'pendidikan_saudara_kandung'=>$pend_saudara_kandung,
        'kelas_saudara_kandung'=>$kelas_saudara_kandung,
        'no_induk_saudara_kandung'=>$no_induk_saudara_kandung   
        );
        $insert_data1 = $this->db->insert('saudara_kandung_anak',$data1);

        $status_tempat_tinggal = $this -> input -> post('status_tempat_tinggal');
        $jarak_rumah_ke_sekolah = $this -> input -> post('jarak_rumah_ke_sekolah');
        $luas_bangunan_rumah = $this -> input -> post('luas_bangunan_rumah');
        $jumlah_kamar = $this -> input -> post('jumlah_kamar');
        $data2 = array(
          'id_siswa' => 2,
          'status_tempat_tinggal' => $status_tempat_tinggal,
          'jarak_rumah_ke_sekolah' => $jarak_rumah_ke_sekolah,
          'luas_bangunan_rumah' => $luas_bangunan_rumah,
          'jumlah_kamar' => $jumlah_kamar 
        );
        $insert_data2 = $this ->db->insert('data_tempat_tinggal',$data2);


      if ($insert_data && $insert_data1 && $insert_data2 >= 0) {
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

