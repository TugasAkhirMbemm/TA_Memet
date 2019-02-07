<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
	public function index()
	{
		$this->load->view('v_daftar_akun');
	}
	public function buat(){
		if(isset($_POST['btnSimpan'])){
        $nama = $this -> input -> post ('nama');
       	$email = $this -> input -> post ('email');
        $pass = $this -> input -> post ('password');
        $data = array(
        'nama_user'=>$nama,
        'email_user'=>$email,
        'id_jenjang' => 2, 
        'password_user'=>md5($pass)
        );
        $insert_data = $this->db->insert('user',$data);
      if ($insert_data >= 0) {
      	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan, Silahkan Login"));
        header('location:'.base_url("Home"));
       } else{
       $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
       header('location:'.base_url("Daftar"));
       }
    }else{
      echo "gagal";
    }

  }	
}
