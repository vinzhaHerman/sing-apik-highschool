<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academics extends CI_Controller {





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





	public function curriculum()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/academics_curriculum');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	public function teachers()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/academics_teachers');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	public function achivements()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_history');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}

}