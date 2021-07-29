<?php
class M_bidan extends CI_model{

	public function get_all()
	{
		return $this->db->get('tbl_bidan')->result();
	}

	  // public function ceklogin($no, $namaobat, $stok, $harga)
	  // {
	  // 	 $this ->db->where('no',$no);
	  // 	  $this ->db->where('namaobat', $namaobat);
	  // 	  $this ->db->where('stok', $stok);
	  // 	  $this ->db->where('harga', $harga);

   //       return $this->db->get($this->table);
	  	 
	  // }
	public function create($array_bidan)
	{
		return $this->db->insert('tbl_bidan', $array_bidan);
	}

		public function get_id($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_bidan')->row();
	}

	public function update($array_bidan='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_bidan', $array_bidan);
	}
}