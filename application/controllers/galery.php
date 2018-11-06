<?php
class galery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload');
	}



	function melihatfoto(){
		$x['header']='header';
		$x['data']=$this->m_berita->get_gambar();
		$x['isi']='vgalery';
		$this->load->view('vhome',$x);


	}


}
