<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {





	function __construct(){
        parent::__construct();
        $this->load->library('upload');
    }

	



	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_headmaster');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	public function visi_dan_misi()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_vnm');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	public function headmaster()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_headmaster');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	public function history()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_history');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}

}