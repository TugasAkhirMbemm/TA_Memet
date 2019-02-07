<?php
/**
 * 
 */
class Data_kemampuan extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
      	$this->load->model('data_model');
    	$this->load->model('core');
	}
	public function index(){

	}
	public function t_entri_kemampuan_anak(){
		if (isset($_POST['btnSimpan'])) {
			$bangun_tidur_sendiri = $this -> input -> post('bangun_tidur');
			$membersihkan_tempat_tidur_sendiri = $this -> input -> post('membersihkan_tempat_tidur');
			$mandi_sendiri = $this -> input -> post('mandi_sendiri');
			$gosok_gigi = $this -> input -> post('gosok_gigi_sendiri');
			$mengenakan_pakaian_sendiri = $this -> input -> post('mengenakan_pakaian_sendiri');
			$makan_sendiri = $this -> input -> post('makan_sendiri');
			$memakai_sepatu_sendiri = $this -> input -> post('memakai_sepatu_sendiri');
			$tidur_tidak_ditemani = $this -> input -> post('tidur_tidak_ditemani');
			$bermain_kerumah_tangga = $this -> input -> post('bermain_ke_tetangga');
			$bermain_sendiri = $this -> input -> post('bermain_sendiri');
			$mengucapkan_terima_kasih = $this -> input -> post('mengucapkan_terima_kasih');
			$mengucapkan_salam = $this -> input -> post('mengucapkan_salam');
			$menjawab_salam = $this -> input -> post('menjawab_salam');
			$hafal_doa = $this -> input -> post('hafal_doa_doa');
			$mengenal_huruf_latin = $this -> input -> post('mengenal_huruf_latin');
			$mengenal_huruf_arab = $this -> input -> post('mengenal_huruf_arab');
			$mengenal_angka_sampai_5 = $this -> input -> post('mengenal_angka_sampai_5');
			$menulis_angka_sampai_5 = $this -> input -> post('menulis_angka_sampai_5');
			$menulis_huruf_latin = $this -> input -> post('menulis_latin');
			$menulis_huruf_arab = $this -> input -> post('menulis_arab');
			$menggambar_bentuk_sesuatu = $this -> input -> post('menggambar');
			$mewarnai_suatu_gambar = $this -> input -> post('mewarnai_gambar');
			$menceritakan_pengalaman = $this -> input -> post('menceritakan_pengalaman');
			$belajar_baca_quran = $this -> input -> post('belajar_baca_quran');
			$buku_yang_digunakan = $this -> input -> post('buku_yg_digunakan');
			$pencapaian_jilid = $this -> input -> post('pencapaian_jilid');
			$surat_pendek_yang_dihafal = $this -> input -> post('surat_pendek_yang_dihafal');
			
			$data = array(
				'id_siswa' => 2 ,
				'bangun_tidur_sendiri' => $bangun_tidur_sendiri,
				'membersihkan_tempat_tidur_sendiri' => $membersihkan_tempat_tidur_sendiri,
				'mandi_sendiri' => $mandi_sendiri,
				'gosok_gigi_sendiri' => $gosok_gigi,
				'mengenakan_pakaian_sendiri' => $mengenakan_pakaian_sendiri,
				'makan_sendiri' => $makan_sendiri,
				'memakai_sepatu_sendiri' => $memakai_sepatu_sendiri,
				'tidur_tidak_ditemani' => $tidur_tidak_ditemani,
				'bermain_ke_rumah_tangga' => $bermain_kerumah_tangga,
				'bermain_sendiri' => $bermain_sendiri,
				'mengucapkan_terima_kasih' => $mengucapkan_terima_kasih,
				'mengucapkan_salam' => $mengucapkan_salam,
				'menjawab_salam' => $menjawab_salam,
				'hafal_doa_tertentu' => $hafal_doa,
				'mengenal_huruf_latin' => $mengenal_huruf_latin,
				'mengenal_huruf_arab' => $mengenal_huruf_arab,
				'mengenal_angka_sampai_dengan_5' => $mengenal_angka_sampai_5,
				'menulis_angka_sampai_dengan_5' => $menulis_angka_sampai_5,
				'menulis_huruf_latin' => $menulis_huruf_latin,
				'menulis_huruf_arab' => $menulis_huruf_arab,
				'menggambar_bentuk_sesuatu' => $menggambar_bentuk_sesuatu,
				'mewarnai_suatu_gambar' => $mewarnai_suatu_gambar,
				'menceritakan_pengalaman' => $menceritakan_pengalaman,
				'belajar_baca_quran' => $belajar_baca_quran,
				'buku_yang_digunakan' => $buku_yang_digunakan,
				'pencapaian_jilid' => $pencapaian_jilid,
				'surat_pendek_yg_sudah_hafal' => $surat_pendek_yang_dihafal 
			);
			$insert_data = $this->db->insert('kemampuan_anak',$data);

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