<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
			$this->load->model('data_model');
	    	$this->load->model('core');
	}
	public function index()
	{
		$this->load->view('v_home');
	}
}
