<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
    public function index(){

    }
	public function Panduan(){
		$this->load->view('v_panduan');

	}
	public function Daftar_Siswa(){
		$data['jenjang']=$this->data_model->get_jenjang();
		$this->load->view('v_daftar_siswa',$data);	
	}
	public function t_daftar_siswa(){
		if(isset($_POST["btnSimpan"])){
			$nama = $this-> input -> post("nama");
			$alamat = $this-> input -> post("alamat");
			$nohp = $this-> input -> post("no_hp"); 
			$asalsek = $this-> input -> post("asal_sekolah");
			$jenjang = $this-> input -> post("jenjang");
			$data = array(
				'id_jenjang' =>$jenjang,
				'nama' =>$nama,
				'alamat' =>$alamat,
				'asal_sekolah' =>$asalsek,
				'no_hp' => $nohp);
			$insert_data = $this->db->insert("data_awal",$data); 
		}
		 if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan",$this->core->alert_succes("Anda telah terdaftar, Silahkan menunggu pengumuman"));
        redirect(base_url().'PPDB/Daftar_Siswa');
      	}else{
        $this->session->set_flashdata("Pesan",$this->core->alert_time("Data gagal di kirim"));
        redirect(base_url().'PPDB/Daftar_Siswa');
      	}	
	}

	public function UploadPendaftaran(){
		$this->load->view('v_upload_bukti_pendaftaran');
	}

	public function t_upload_pndaftaran(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Bukti_pendaftaran/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_bukti_pendaftaran'))
        {
            $upload_data = $this -> upload -> data ();
            $foto = "gallery/Bukti_pendaftaran/".$upload_data['file_name'];
        $data = array(
        'id_user' => 2,
        'nama_bukti_gambar' => $foto
        );
        $insert_data = $this->db->insert('bukti_transaksi',$data);
      }
      if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil terkirim"));
        redirect(base_url().'PPDB/UploadPendaftaran');
       } else{
        $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal terkirim"));
        redirect(base_url().'PPDB/UploadPendaftaran');
       }
    }else{
      $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal terkirim, cek gambar"));
    }
  }
	
}
