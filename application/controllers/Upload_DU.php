<?php
/**
 * 
 */
class Upload_DU extends CI_Controller {

  function __construct()
    {
  parent::__construct();
        $this->load->model('data_model');
      $this->load->model('core');
    }
    public function index(){

    }
    public function UploadDaftarUlang(){
    $this->load->view('v_upload_bukti_daftarulang');
    
  }
    public function t_upload_bukti_daftar_ulang(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Bukti_daftar_ulang/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_bukti_daftarulang'))
        {
            $upload_data = $this -> upload -> data ();
            $foto = "gallery/Bukti_daftar_ulang/".$upload_data['file_name'];
        $data = array(
        'id_user' => 3,
        'id_siswa'=> 13,
        'id_pembayaran'=>2,
        'gambar' => $foto
        );
        $insert_data = $this->db->insert('pendaftaran_ulang',$data);
      }
      if ($insert_data) {
        $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil terkirim"));
        redirect(base_url().'Upload_DU/UploadDaftarUlang');
       } else{
        $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal terkirim"));
        redirect(base_url().'Upload_DU/UploadDaftarUlang');
       }
    }else{
      $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal terkirim, cek gambar"));
    }
  
  }
}