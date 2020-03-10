<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class News extends CI_Controller{
    	function __construct(){
        	parent::__construct();
        	$this->load->model('news');
        	$this->load->library('upload');
        }





        public function index(){ 
        $data['data']=$this->news->get_all_news();
        $this->load->view('template/head');
		$this->load->view('template/nav');
    	$this->load->view('page/news_list',$data,false);
    	$this->load->view('template/footer');
		$this->load->view('template/foot');
		}




		public function read_news($newsid){ 
        $data=$this->news->get_news_by_id($newsid);
            $this->load->view('template/head');
			$this->load->view('template/nav');
            $this->load->view('posts/post_detail',$data,FALSE);
            $this->load->view('template/footer');
			$this->load->view('template/foot');
		}
	}
?>