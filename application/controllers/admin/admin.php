<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index(){
  
  		 if ($this ->session ->userdata('level')==4) {
	
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
			$data['side']='tampil/side/sidesekretaris';
			$data['content']='tampil/utama/v_dashboard';
			$this->load->view('tampil/utama/main',$data);
		}
		elseif ($this ->session ->userdata('level')==3) {
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
				$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
				$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
				$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
				$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
				$data['side']='tampil/side/sidesmp';
				$data['content']='tampil/utama/v_dashboard';
				$this->load->view('tampil/utama/main',$data);
		}
		elseif ($this ->session ->userdata('level')==2) {
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
	  			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
	  			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
	  			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
	  			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
	  			$data['side']='tampil/side/sidesd';
	  			$data['content']='tampil/utama/v_dashboard';
	  			$this->load->view('tampil/utama/main',$data);
		}
		elseif ($this ->session ->userdata('level')==1) {
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
  			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
  			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
  			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
  			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
  			$data['side']='tampil/side/sidetk';
  			$data['content']='tampil/utama/v_dashboard';
  			$this->load->view('tampil/utama/main',$data);
		}
		elseif ($this ->session ->userdata('level')==5) {
			$data['daftar_baru'] = $this->mymodel->dashboard_daftar_baru();
  			$data['daftar_ulang'] = $this->mymodel->dashboard_daftar_ulang();
  			$data['lulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='1'")->num_rows();
  			$data['belumlulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='3'")->num_rows();
  			$data['tidaklulus']=$this->mymodel->dashboard_daftar_kelulusan("WHERE id_status_diterima='2'")->num_rows();
  			$data['side']='tampil/side/sidedirektur';
  			$data['content']='tampil/utama/v_dashboard';
  			$this->load->view('tampil/utama/main',$data);
		}


  }
}