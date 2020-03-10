<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {





	function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('events');
        $this->load->model('tuition');
        $this->load->model('schedule');
        $this->load->model('news');
        $this->load->helper('text');
        $this->load->library('upload');
    }





    function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->m_login->cek_login("users",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
            echo "Username dan password salah !";
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }





	public function index()
	{
        if($this->session->userdata('status') != "login"){
            redirect(base_url("admin/login"));
        }
		$this->load->view('template_admin/head');
		$this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
		$this->load->view('pages_admin/home_admin');
		$this->load->view('template_admin/footer');
	}





    public function login()
    {
        $this->load->view('pages_admin/login_admin');
    }





    public function events(){
        $data=array('res'=>$this->events->get_all_event());
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/events',$data);
        $this->load->view('template_admin/footer');
    }





    public function write_event()
    {
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/write-event');
        $this->load->view('template_admin/footer');
    }





	public function save_event(){
        
        $eventdate=$this->input->post('eventdate');
        $eventtitle=$this->input->post('eventtitle');
        $eventtext=$this->input->post('eventtext');
 
        $this->events->save_events($eventtitle,$eventtext,$eventdate,$image);
        redirect('admin/events');
                 
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





    public function edit_event($id="")
    {
        $data=array(
            'event'=>$this->events->get_event_by_id($id)
        );
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/edit_event',$data, FALSE);
        $this->load->view('template_admin/footer');
    }





    public function update_event(){

        $eventid=$this->input->post('eventid');
        $eventdate=$this->input->post('eventdate');
        $eventtitle=$this->input->post('eventtitle');
        $eventtext=$this->input->post('eventtext');
 
        $this->events->update_events($eventid,$eventtitle,$eventtext,$eventdate);
        redirect('admin/events');
    }





    public function delete_event($eventid){
        $this->events->delete_event($eventid);
        redirect('admin/events');
    }

    






    public function news(){
        $data=array('res'=>$this->news->get_all_news());
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/news',$data);
        $this->load->view('template_admin/footer');
    }





    public function write_news()
    {
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/write-news');
        $this->load->view('template_admin/footer');
    }





    public function save_news(){
        $config['upload_path'] = './uploads/news_images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['image']['name'])){
            if ($this->upload->do_upload('image')){
                $img = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./uploads/news_images/'.$img['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './uploads/news_images/'.$img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $image=$img['file_name'];
                
 
                
        }else{
        }
                      
        }else{
        }

        $newsdate=$this->input->post('newsdate');
                $newstitle=$this->input->post('newstitle');
                $newstext=$this->input->post('newstext');
        $this->news->save_news($newstitle,$newstext,$newsdate,$image);
                redirect('admin/news');
                 
    }





    public function edit_news($id="")
    {
        $data=array(
            'news'=>$this->news->get_news_by_id($id)
        );
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/edit_news',$data, FALSE);
        $this->load->view('template_admin/footer');
    }





    public function update_news(){
        $eventid=$this->input->post('eventid');
        $img_old=$this->input->post('img_old');
        $config['upload_path'] = './uploads/news_images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['image']['name'])){
            if ($this->upload->do_upload('image')){
                unlink('./uploads/news_images/'.$img_old);
                $img = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./uploads/news_images/'.$img['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './uploads/news_images/'.$img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $image=$img['file_name'];
        
        }else{
        }
                      
        }else{
        }
        $newsid=$this->input->post('newsid');
        $newsdate=$this->input->post('newsdate');
        $newstitle=$this->input->post('newstitle');
        $newstext=$this->input->post('newstext');
 
        $this->news->update_news($newsid,$newstitle,$newstext,$newsdate);
        redirect('admin/news');
    }





    public function delete_news($newsid){
        $this->news->delete_news($newsid);
        redirect('admin/news');
    }





    public function edit_fee($id="")
    {
        $data=array(
            'tuition'=>$this->tuition->get_tuition_content($id)
        );
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/edit_tuition_fee',$data, FALSE);
        $this->load->view('template_admin/footer');
    }





    function update_tuition()
    {
        $tuitionid=$this->input->post('tuitionid');
        $tuitioncontent=$this->input->post('tuitioncontent');
        $this->tuition->update_tuition($tuitionid,$tuitioncontent);
        redirect('admin/edit_fee');
    }





    function update_schedule()
    {
        $scheduleid=$this->input->post('scheduleid');
        $schedulecontent=$this->input->post('schedulecontent');
        $this->schedule->update_schedule($scheduleid,$schedulecontent);
        redirect('admin/edit_schedule');
    }





    public function edit_schedule($id="")
    {
        $data=array(
            'schedule'=>$this->schedule->get_schedule_content($id)
        );
        $this->load->view('template_admin/head');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/navigation');
        $this->load->view('pages_admin/edit_schedule',$data, FALSE);
        $this->load->view('template_admin/footer');
    }
	
}