<?php
class m_kim extends CI_Model{

  function simpan_KIM($SK,$tentang,$kecamatan,$tanggal,$desa,$alamat,$ketua,$sekretaris,$bendahara,$b_pengumpulan_informasi,$b_pengelola_informasi,$b_penyebaran_informasi){
		$hsl=$this->db->query("INSERT INTO kim (sk,tentang,kecamatan,tanggal,desa,alamat,ketua,sekretaris,bendahara,b_pengumpulan_informasi,b_pengelola_informasi,b_penyebaran_informasi) VALUES ('$SK','$tentang','$kecamatan','$tanggal','$desa','$alamat','$ketua','$sekretaris','$bendahara','$b_pengumpulan_informasi','$b_pengelola_informasi','$b_penyebaran_informasi')");
		return $hsl;
	}

  function get_all_kim(){
		$hsl=$this->db->query("SELECT * FROM kim ORDER BY id_kim DESC");
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
}
