<?php
class m_kim extends CI_Model{

  //Begin Query Builder Bayu
  function insertData($tabel, $data) {
    $this->db->insert($tabel, $data);
  }
  //End Query Builder Bayu

   function simpan_KIM($SK,$tentang,$kecamatan,$tanggal,$desa,$alamat,$ketua,$sekretaris,$bendahara,$b_pengumpulan_informasi,$b_pengelola_informasi,$b_penyebaran_informasi){
	$hsl=$this->db->query("INSERT INTO kim (sk,tentang,kecamatan,tanggal,desa,alamat,ketua,sekretaris,bendahara,b_pengumpulan_informasi,b_pengelola_informasi,b_penyebaran_informasi) VALUES ('$SK','$tentang','$kecamatan','$tanggal','$desa','$alamat','$ketua','$sekretaris','$bendahara','$b_pengumpulan_informasi','$b_pengelola_informasi','$b_penyebaran_informasi')");
 	return $hsl;
	 }

  function get_all_kim(){
		$hsl=$this->db->query("SELECT * FROM kim a join t_kecamatan b on a.id_kecamatan = b.id_kecamatan ORDER BY id_kim DESC");
		return $hsl;
	}

  function delete_kim($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  function edit_kim($where,$table){
		return $this->db->get_where($table,$where);
	}
  function update_kim($where,$x,$table){
    $this->db->where($where);
    $this->db->update($table,$x);
  }

function get_all_kim_koor($kode){
		$hsl=$this->db->query("SELECT * FROM kim WHERE id_kim='$kode'");
		return $hsl;
	}

function get_option() {
 $this->db->select('*');
 $this->db->from('t_kecamatan');
 $query = $this->db->get();
 return $query->result();
}


function get_data_jumlahkim(){
        $query = $this->db->query("SELECT b.kecamatan,  count(id_kim) as jumlah FROM kim a join t_kecamatan b on a.id_kecamatan = b.id_kecamatan GROUP BY a.id_kecamatan ");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
