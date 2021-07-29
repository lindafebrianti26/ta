<?php
class M_users extends CI_model{

	 public function get_all()
	{
		return $this->db->get('users')->result();
	}

	public function get_id($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('users')->row();
	}

	public function create($array_pegawai)
	{
		return $this->db->insert('users', $array_pegawai);
	}

	public function update($array_pegawai='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('users', $array_pegawai);
	}

	public function get_user($email,$pass){
		// $this->db->where('username', $username);
		return $this->db->get_where('users', array('email' => $email, 'password' => $pass))->row_array();
		// select * from users where username = $username AND password = $pass;
	}
}