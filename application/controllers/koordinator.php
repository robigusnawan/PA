<?php
class koordinator extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload');
		$this->load->model('m_kim');
	}
	function index(){
		$x['header']='koordinator/header_koor';

		$x['isi']='koordinator/v_post_news_koor';
		$this->load->view('koordinator/v_home_koor',$x);
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


				$this->m_berita->simpan_berita($jdl,$berita,$gambar,$status);
				redirect('post_berita/upload_list');
		}else{
			redirect('post_berita');
	    }

	    }else{
			redirect('post_berita');
		}

	}

	function kim_koor(){
		$x['header']='koordinator/header_koor';
		$x['kecamatan']=$this->m_kim->get_option();
		$x['isi']='koordinator/v_kim_koor';
		$this->load->view('koordinator/v_home_koor',$x);
	}
	function tambahkim_koor(){
			  $SK=$this->input->post('SK');
			  $tentang=$this->input->post('TENTANG');
			  $kecamatan=$this->input->post('KECAMATAN');
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


			$this->m_kim->simpan_KIM($SK,$tentang,$kecamatan,$tanggal,$desa,$alamat,$ketua,$sekretaris,$bendahara,$b_pengumpulan_informasi,$b_pengelola_informasi,$b_penyebaran_informasi);
			redirect('kim/list_kim');
	}



	function list_kim_koor(){
				$kode=$this->uri->segment(3);
			  	$x['data']=$this->m_kim->get_all_kim_koor($kode);
				$x['header']='koordinator/header_koor';
				$x['isi']='koordinator/v_kim_list_koor';
				$this->load->view('koordinator/v_home_koor',$x);
	}



}
