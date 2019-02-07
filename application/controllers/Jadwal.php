<?php
/**
 * 
 */
class Jadwal extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
    public function index(){

    }
    public function JadwalTestTK(){
		$data['jadwalTK'] = $this->data_model->get_jadwal_TK();
		$this->load->view('v_jadwal_test_tk',$data);
		
	}
	public function JadwalTestSD(){
		$data['jadwalSD'] = $this->data_model->get_jadwal_SD();
		$this->load->view('v_jadwal_test_sd',$data);
		
	}
	public function JadwalTestSMP(){
		$data['jadwalSMP'] = $this->data_model->get_jadwal_SMP();
		$this->load->view('v_jadwal_test_smp',$data);
		
	}
}