<?php
class cvalidasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload','session');
	}

function validasi(){
	$x['header']='admin/header_admin';
		$x['data']=$this->m_berita->get_all_berita();

		$x['isi']='admin/vvalidasiberita';
		$this->load->view('admin/v_home_admin',$x);
		//$this->load->view('vvalidasiberita',$x);
	}

  function hapus_berita($kode){
    $where = array('berita_id' => $kode);
    $this->m_berita->delete_berita($where,'tbl_berita');
    redirect('cvalidasi/validasi');
  }

  function ubah_berita($kode){
		$x['header']='admin/header_admin';
		$x['isi']='admin/v_update_berita';
		$where = array('berita_id' => $kode);
		$x['data'] =	 $this->m_berita->edit_berita($where,'tbl_berita')->result();
			$this->load->view('admin/v_home_admin',$x);
		}

  function update()
    {

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
                $kode=$this->input->post('berita_id');
                   $jdl=$this->input->post('judul');
                   $berita=$this->input->post('berita');

                  $status=$this->input->post('status');
                  $x = array(	'berita_judul' => $jdl,
                              'berita_isi'=>$berita,
                              'berita_image'=>$gambar,
                              //'berita_id' => $berita,
                              'status' => $status
                  );

                $where = array(
                  'berita_id' => $kode
                );


            $this->m_berita->update_berita($where,$x,'tbl_berita');
          redirect('cvalidasi/validasi');
      }else{
        redirect('cvalidasi/ubah_berita');
        }

        }else{
        redirect('cvalidasi/ubah_berita');
      }
    }
}
