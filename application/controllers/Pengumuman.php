<?php
/**
 * 
 */
class Pengumuman extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
    public function index(){

    }
   public function Peng_Awal(){
		$this->load->view('v_peng_awal');
		
	}
	public function Peng_Akhir(){
		$this->load->view('v_peng_akhir');
		
	}
}