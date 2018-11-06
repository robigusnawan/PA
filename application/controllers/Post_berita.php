<?php
class Post_berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload');

	}
	function index(){
		$x['header']='admin/header_admin';
		$x['isi']='admin/v_post_news';
		$this->load->view('admin/v_home_admin',$x);
	}

	function simpan_post(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
				$status=$this->input->post('status');

// $input = array(
//   						'judul'		=>$jdl,
//   						'berita'	=>$berita,
//   						'gambar'	=>$gambar,
//   						'status'	=>$status
//   				 );
//   				$this->m_berita->insertData('post_berita', $input);
// 				print_r($input);
				$this->m_berita->simpan_berita($jdl,$berita,$gambar,$status);
				redirect('cvalidasi/validasi');
		}else{
			redirect('post_berita');
	    }

	    }else{
			redirect('post_berita');
		}

	}

	function upload_list(){
		$config['base_url'] = site_url('post_berita/upload_list'); //site url
					 $config['total_rows'] = $this->db->count_all('tbl_berita'); //total row
					 $config['per_page'] = 3;  //show record per halaman
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
					 $data['data'] = $this->m_berita->get_all_berita($config["per_page"], $data['page']);

					 $data['pagination'] = $this->pagination->create_links();

		$data['header']='header';
		$data['data']=$this->m_berita->get_all_berita();
		$data['isi']='v_list_upload';
		$this->load->view('vhome',$data);



	}

	function lists(){
		$x['header']='header';
		$x['data']=$this->m_berita->get_all_berita();
		$x['isi']='v_post_list';
		$this->load->view('vhome',$x);

	}

	function view(){

		$kode=$this->uri->segment(3);
		$x['data']=$this->m_berita->get_berita_by_kode($kode);
		$x['header']='header';
		$x['isi']='v_post_view';
		$this->load->view('vhome',$x);
	}

}
