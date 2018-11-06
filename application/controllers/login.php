<?php
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
    $this->load->library('session');
	$this->load->model('m_login');
	}
  public function index(){
    $this->load->view('v_login');
  }

  function cek_login(){
    if (isset($_POST['login'])){
      $username =$this->input->post('username',true);
      $password =$this->input->post('password',true);
      $cek =$this->m_login->proses_login($username,$password);
      $hasil= count($cek);
      if($hasil >0){
        $pelogin =$this->db->get_where('akun',array('username' =>$username ,'password'=>$password ))->row();
        if($pelogin->level== 'admin'){
					$newdata = array(
        'level'  => $pelogin->level,
        'username'     => $username,
        'logged_in' => TRUE
);
$this->session->set_userdata($newdata);
          redirect('admin');

        }elseif ($pelogin->level== 'koordinator') {
					$newdata = array(
				'level'  => $pelogin->level,
				'username'     => $username,
				'logged_in' => TRUE
);
          $this->session->set_userdata($newdata);
          redirect('koordinator');
        }
			}else{

  				redirect('login/index');
					echo "password dan uername tidak terdaftar";
        }
      }
    }


  public function logout(){
    $this->session->sess_destroy();
    redirect('login/index');
  }


}
