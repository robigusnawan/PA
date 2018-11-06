<?php
class regulasi extends CI_Controller{
	function __construct(){
		parent::__construct();
    $this->load->library('session');
  			$this->load->model('m_regulasi');
        $this->load->library('upload');
	}
	function index(){
		$x['header']='admin/header_admin';
		$x['isi']='admin/v_regulasi';
		$this->load->view('admin/v_home_admin',$x);

	}
function tambahregulasi(){
  $judul_regulasi=$this->input->post('judul_regulasi');
  $isi_regulasi=$this->input->post('isi_regulasi');



$this->m_regulasi->add_regulasi($judul_regulasi,$isi_regulasi);
redirect('regulasi/list_regulasi');
}

function list_regulasi(){
  $x['data']=$this->m_regulasi->getregulasi();
	$x['header']='admin/header_admin';
		$x['isi']='admin/v_regulasi_list';
  $this->load->view('admin/v_home_admin',$x);

}

function hapus_regulasi($id_regulasi){
	$where = array('id_regulasi' => $id_regulasi);
	$this->m_regulasi->delete_regulasi($where,'t_regulasi');
	redirect('regulasi/list_regulasi');
}

function list_upload_regulasi(){
  $x['data']=$this->m_regulasi->getregulasi();
	$x['header']='header_home';
		$x['isi']='v_upload_regulasi';
  $this->load->view('vhome',$x);

}

public function cari(){
	$x['data']=$this->m_regulasi->getregulasi();
 	$x['header']='header_admin';
		$x['isi']='v_upload_regulasi';
			$keyword = $this->input->post('cari');
			$x['data']=$this->m_regulasi->get_regulasi_keyword($keyword);
			$this->load->view('vhome',$x);
		}



}
