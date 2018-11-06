<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->library('upload');

	}
	function index(){
		$this->load->model('m_berita');
		$x['header']='header_home';
		$x['data']=$this->m_berita->get_all_berita_publish();
		$this->load->view('vhome',$x);
	}


}
