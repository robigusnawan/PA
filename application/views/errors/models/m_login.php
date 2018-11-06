<?php
class m_login extends CI_Model{

	function proses_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('akun')->row();
	}
}
