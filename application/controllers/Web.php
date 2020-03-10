<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {





	function __construct(){
        parent::__construct();
        $this->load->model('events');
        $this->load->model('news');
        $this->load->model('tuition');
        $this->load->model('schedule');
        $this->load->helper('text');
        $this->load->library('upload');
    }

	



	public function index()
	{
		
		$data=array(
                'event'=>$this->events->get_all_event3()->result(),
                'news'=>$this->news->get_all_news3()->result()
        );
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/home',$data);
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
	public function facility()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/about_headmaster');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
	}





	function lists(){
        $x['data']=$this->m_berita->get_all_berita();
        $this->load->view('v_post_list',$x);
    }
    function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->m_berita->get_berita_by_kode($kode);
        $this->load->view('v_post_view',$x);
    }





    public function facilities(){
    	$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/facility');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
    }





    public function curricular(){
    	$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/curricular');
		$this->load->view('template/footer');
		$this->load->view('template/foot');
    }





    public function procedure(){
    	$data=array(
                'tuition'=>$this->tuition->get_tuition_content()->result()
        );
    	$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/apply_procedure', $data);
		$this->load->view('template/footer');
		$this->load->view('template/foot');
    }





    public function schedule(){
        $data=array(
                'schedule'=>$this->schedule->get_schedule_content()->result()
        );
        $this->load->view('template/head');
        $this->load->view('template/nav');
        $this->load->view('pages/schedule', $data);
        $this->load->view('template/footer');
        $this->load->view('template/foot');
    }





    public function all_news(){
    	$data=array(
    		'res'=>$this->news->get_all_news()
    	);
    	$this->load->view('template/head');
		$this->load->view('template/nav');
    	$this->load->view('news/news_list',$data);
    	$this->load->view('template/footer');
		$this->load->view('template/foot');
    }




    public function read_news($newsid=""){
    	$data=array(
    		'news'=>$this->news->get_news_by_id($newsid)
    	);
    	$this->load->view('template/head');
		$this->load->view('template/nav');
    	$this->load->view('news/detail_news',$data,false);
    	$this->load->view('template/footer');
		$this->load->view('template/foot');
    }
}
