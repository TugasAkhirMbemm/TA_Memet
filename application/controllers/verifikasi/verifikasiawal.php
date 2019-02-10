<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifikasiAwal extends CI_Controller {

	//view tampilan form data awal verivikasi user baru

	 public function pgtk(){
		$data['pengumuman']=$this->mymodel->tampilverifikasiawaltk();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/usertk';
	 	$this->load->view('tampil/utama/main',$data);
	}

	 public function pgsd(){
		 $data['pengumuman']=$this->mymodel->tampilverifikasiawalsd();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/usersd';
	 	$this->load->view('tampil/utama/main',$data);
	 }

	 public function pgsmp(){
		 $data['pengumuman']=$this->mymodel->tampilverifikasiawalsmp();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/usersmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }


	 // Update Verifikasi Function
	 public function dttk(){
	 	//update data tk (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_awal($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/updatetk';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsd(){
	 	//update data sd (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_ulang($id);
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/updatesd';
	 	$this->load->view('tampil/utama/main',$data);
	 }
	  public function dtsmp(){
	 	//update data smp (view)
		$id=$this->uri->segment(4);
		$data['pengumuman']=$this->mymodel->verifikasi_awal();
	 	$data['side']='tampil/side/sidesekretaris';
	 	$data['content']='tampil/VerifikasiAwal/updatesmp';
	 	$this->load->view('tampil/utama/main',$data);
	 }

	 public function proses_update_tk(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
		// $update_data = $this->db->update('bukti_transaksi_daftar_ulang', $data);
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_baru',$data, $where);
 		header('location:'.base_url().'verifikasi/verifikasiawal/pgtk');
	 }

	 public function proses_update_sd(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
		$update_data = $this->db->update('pendaftaran_baru', $data);

 		$data['id_pembayaran']=$this->input->post('status');
 		$update_data2 = $this->db->update('pembayaran', $data2);
 		
 		header('location:'.base_url().'verifikasi/verifikasiawal/pgsd');
	 }

	 public function proses_update_smp(){
		 //proses update verifikasi pertama atau pendaftaran baru
		$where['id_user']=$this->input->post('id_user');
 		$data['id_pembayaran']=$this->input->post('status');
 		$this->mymodel->update('pendaftaran_baru',$data, $id);
 		header('location:'.base_url().'verifikasi/verifikasiawal/pgsmp');
	 }

	 public function deletedatatk()
 	{
 		$id=$this->uri->segment(4);
 		$deletebyid=array('id_user'=>$id);
 		$this->mymodel->delete('pendaftaran_ulang',$deletebyid);
 		header('location:'.base_url().'verifikasi/verifikasiawal/pgtk');
 	}

	public function deletedatasd()
 {
	 $id=$this->uri->segment(4);
	 $deletebyid=array('id_user'=>$id);
	 $this->mymodel->delete('pendaftaran_baru',$deletebyid);
	 header('location:'.base_url().'verifikasi/verifikasi/pgsd');
 }

 public function deletedatasmp()
{
	$id=$this->uri->segment(4);
	$deletebyid=array('id_user'=>$id);
	$this->mymodel->delete('pendaftaran_baru',$deletebyid);
	header('location:'.base_url().'verifikasi/verifikasiawal/pgsmp');
}

}
