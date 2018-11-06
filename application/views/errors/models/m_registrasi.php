<?php
class m_registrasi extends CI_Model{

  function simpan_user($username,$password,$level){
		$hsl=$this->db->query("INSERT INTO akun (username,password,level) VALUES ('$username','$password','$level')");
		return $hsl;
	}

  function get_all_user(){
		$hsl=$this->db->query("SELECT * FROM akun ORDER BY id_akun DESC");
		return $hsl;
	}

  function delete_user($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
