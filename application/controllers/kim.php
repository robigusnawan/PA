<?php
class kim extends CI_Controller{
	function __construct(){
		parent::__construct();
    		
  			$this->load->model('m_kim');
        	$this->load->library('upload');
	}
	function index(){
		$x['header']='admin/header_admin';
		$x['kecamatan']=$this->m_kim->get_option();
		$x['isi']='admin/v_kim';
		$this->load->view('admin/v_home_admin',$x);
	 // $data=array('get_kecamatan'=> $this->m_kim->get_option());  
	 	// $this->load->view('admin/v_kim',$data);
	 	 // redirect('kim', $data); 
 }
	// function prosestambah(){
	// 	$x['header']='admin/header_admin';
	// 	$x['isi']='admin/v_kim';
	// 	$this->load->view('admin/v_home_admin',$x);
	// }

// 	 function chart(){
//         $x['data']=$this->m_kim->get_data_jumlahkim();
//         $this->load->view('admin/dashboard_admin',$x);
//     }

function tambahkim(){
  $SK=$this->input->post('SK');
  $tentang=$this->input->post('TENTANG');
  // $kecamatan['kecamatan']=$this->m_kim->get_option();
 $kecamatan=$this->input->post('kecamatan');
$tanggal = date("Y/m/d");
  $tanggal=$this->input->post('tanggal');
  $desa=$this->input->post('DESA');
  $alamat=$this->input->post('ALAMAT');
  $ketua=$this->input->post('KETUA');
  $sekretaris=$this->input->post('SEKRETARIS');
  $bendahara=$this->input->post('BENDAHARA');
  $b_pengumpulan_informasi=$this->input->post('B_PENGUMPULAN_INFORMASI');
  $b_pengelola_informasi=$this->input->post('B_PENGOLAH_INFORMASI');
  $b_penyebaran_informasi=$this->input->post('B_PENYEBARAN_INFORMASI');
  $input = array(
  							'sk'											=> $SK,
  							'tentang'									=> $tentang,
  							'tanggal'									=> $tanggal,
  							'desa'										=> $desa,
  							'alamat'									=> $alamat,
  							'ketua'										=> $ketua,
  							'sekretaris'							=> $sekretaris,
  							'bendahara'								=> $bendahara,
  							'b_pengumpulan_informasi'	=> $b_pengumpulan_informasi,
  							'b_pengelola_informasi'		=> $b_pengelola_informasi,
  							'b_penyebaran_informasi'	=> $b_penyebaran_informasi,
  							'id_kecamatan'						=> $kecamatan
  				 );
  $this->m_kim->insertData('kim',$input);
  //print_r($input);
//$this->m_kim->simpan_KIM($SK,$tentang,$kecamatan,$tanggal,$desa,$alamat,$ketua,$sekretaris,$bendahara,$b_pengumpulan_informasi,$b_pengelola_informasi,$b_penyebaran_informasi);
redirect('kim/list_kim');
}
function list_kim(){
  	$x['data']=$this->m_kim->get_all_kim();
	$x['header']='admin/header_admin';
	$x['isi']='admin/v_kim_list';
	$this->load->view('admin/v_home_admin',$x);
}

function hapus_kim($id){

	$where = array('id_kim' => $id);
	$this->m_kim->delete_kim($where,'kim');
	redirect('kim/list_kim');
}

function ubah_kim($id){
	$where = array('id_kim' => $id);
	$x['data'] =$this->m_kim->edit_kim($where,'kim')->result();
	$this->load->view('admin/v_kim_list',$x);
	}

	function update_kim(){
		$id=$this->input->post('id_kim');
		$SK=$this->input->post('SK');
		$tentang=$this->input->post('TENTANG');
		$x['data']=$this->m_kim->get_option();
		$kecamatan=$this->input->post('kecamatan');
			$tanggal = date("Y/m/d");
		  $tanggal=$this->input->post('tanggal');
		  $desa=$this->input->post('DESA');
		  $alamat=$this->input->post('ALAMAT');
		  $ketua=$this->input->post('KETUA');
		  $sekretaris=$this->input->post('SEKRETARIS');
		  $bendahara=$this->input->post('BENDAHARA');
		  $b_pengumpulan_informasi=$this->input->post('B_PENGUMPULAN_INFORMASI');
		  $b_pengelola_informasi=$this->input->post('B_PENGOLAH_INFORMASI');
		  $b_penyebaran_informasi=$this->input->post('B_PENYEBARAN_INFORMASI');

			$x = array(	'SK' => $SK,
									'TENTANG'=>$tentang,
									'kecamatan'=>$kecamatan,
									//'berita_id' => $berita,
									'tanggal' => $tanggal,
									'DESA'=> $desa,
									'ALAMAT'=> $alamat,
									'KETUA'=> $ketua,
									'SEKRETARIS'=> $sekretaris,
									'BENDAHARA' => $bendahara,
									'B_PENGUMPULAN_INFORMASI' => $b_pengumpulan_informasi,
									'B_PENGELOLA_INFORMASI' => $b_pengelola_informasi,
									'B_PENYEBARAN_INFORMASI'=>$b_penyebaran_informasi
								);

		$where = array(
			'id_kim' => $id
		);


$this->m_kim->update_kim($where,$x,'kim');
redirect('kim/list_kim');
	}
	function upload_list_kim(){
		$config['base_url'] = site_url('kim/upload_list_kim'); //site url
					 $config['total_rows'] = $this->db->count_all('kim'); //total row
					 $config['per_page'] = 1;  //show record per halaman
					 $config["uri_segment"] = 3;  // uri parameter
					 $choice = $config["total_rows"] / $config["per_page"];
					 $config["num_links"] = floor($choice);

					 // Membuat Style pagination untuk BootStrap v4
				 $config['first_link']       = 'First';
					 $config['last_link']        = 'Last';
					 $config['next_link']        = 'Next';
					 $config['prev_link']        = 'Prev';
					 $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
					 $config['full_tag_close']   = '</ul></nav></div>';
					 $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
					 $config['num_tag_close']    = '</span></li>';
					 $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
					 $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
					 $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
					 $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
					 $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
					 $config['prev_tagl_close']  = '</span>Next</li>';
					 $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
					 $config['first_tagl_close'] = '</span></li>';
					 $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
					 $config['last_tagl_close']  = '</span></li>';

					 $this->pagination->initialize($config);
					 $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

					 //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model.
					 $data['data'] = $this->m_kim->get_all_kim($config["per_page"], $data['page']);

					 $data['pagination'] = $this->pagination->create_links();

		$data['header']='header_home';
		$data['data']=$this->m_kim->get_all_kim();
		$data['isi']='v_kim_upload';
		$this->load->view('vhome',$data);



	}

	





	 // public function cari(){
	 // 	$x['data']=$this->m_kim->get_all_kim();
 	// 	$x['header']='header_admin';
		// $x['isi']='v_kim_list';
		// $keyword = $this->input->post('cari');
	 // 	$x['data']=$this->m_kim->get_product_keyword($keyword);
	 // 	$this->load->view('v_home_admin',$x);
	 // }


}
