fungsi cari controller

public function cari(){
  $x['data']=$this->m_kim->get_all_kim();
  $x['header']='header_admin';
    $x['isi']='v_kim_list';
      $keyword = $this->input->post('cari');
      $x['data']=$this->m_kim->get_product_keyword($keyword);
      $this->load->view('vhome',$x);
    }



    public function get_product_keyword($keyword){
        $this->db->select('*');
        $this->db->from('KIM');
        $this->db->like('kecamatan',$keyword);
        $this->db->or_like('desa',$keyword);
        return $this->db->get();
      }
