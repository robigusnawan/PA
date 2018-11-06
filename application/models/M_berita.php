<?php
class M_berita extends CI_Model{


	function insertData($tabel, $data) {
    $this->db->insert($tabel, $data);
  }
	
	function simpan_berita($jdl,$berita,$gambar,$status){
		$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image,status) VALUES ('$jdl','$berita','$gambar','$status')");
		return $hsl;
	}
	function get_gambar(){
		$hsl=$this->db->query("SELECT berita_image,berita_judul FROM tbl_berita ORDER BY berita_id DESC");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_berita WHERE berita_id='$kode'");
		return $hsl;
	}
	function delete_berita($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_berita($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_berita($where,$x,$table){
		$this->db->where($where);
		$this->db->update($table,$x);
	}
	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM tbl_berita ORDER BY berita_id DESC");
		return $hsl;
	}

	function get_all_berita_publish(){
		$hsl=$this->db->query("SELECT * FROM tbl_berita where status='publish'");
		return $hsl;
	}

}
