<?php
class m_regulasi extends CI_Model{

  function add_regulasi($judul_regulasi,$isi_regulasi){
		$hsl=$this->db->query("INSERT INTO regulasi (judul_regulasi,isi_regulasi) VALUES ('$judul_regulasi','$isi_regulasi')");
		return $hsl;
	}

  function getregulasi(){
		$hsl=$this->db->query("SELECT * FROM regulasi ORDER BY id_regulasi DESC");
		return $hsl;
	}

  function delete_regulasi($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
