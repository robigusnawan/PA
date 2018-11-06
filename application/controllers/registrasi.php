<?php
class registrasi extends CI_Controller{
	function __construct(){
		parent::__construct();
    $this->load->library('session');
  			$this->load->model('m_registrasi');
        $this->load->library('upload');
	}
	function index(){
		$x['header']='admin/header_admin';
		$x['isi']='admin/v_registrasi';
		$this->load->view('admin/v_home_admin',$x);
	}
function tambahuser(){
  $username=$this->input->post('username');
  $password=$this->input->post('password');
  $level=$this->input->post('level');


$this->m_registrasi->simpan_user($username,$password,$level);
redirect('registrasi/list_user');
}
function list_user(){
  $x['data']=$this->m_registrasi->get_all_user();
	$x['header']='admin/header_admin';
	$x['isi']='admin/v_user_list';
	$this->load->view('admin/v_home_admin',$x);
}

function hapus_user($id){
	$where = array('id_akun' => $id);
	$this->m_registrasi->delete_user($where,'akun');
	redirect('registrasi/list_user');
}
function ubah_user($id){
	$where = array('id_akun' => $id);
	$x['data'] =$this->m_registrasi->edit_user($where,'akun')->result();
	$this->load->view('admin/v_user_list',$x);
	}

	function update_user(){
		$id=$this->input->post('id_akun');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
			$x = array(	'username' => $username,
									'password'=>$password,
									'level'=>$level


								);

		$where = array(
			'id_akun' => $id
		);


$this->m_registrasi->update_user($where,$x,'akun');
redirect('registrasi/list_user');
	}
}
