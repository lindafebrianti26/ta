<?php
class M_pasien extends CI_model{

	public function get_all()
	{
		return $this->db->get('tbl_ibuhamil')->result();
	}

	  // public function ceklogin($no, $namaobat, $stok, $harga)
	  // {
	  // 	 $this ->db->where('no',$no);
	  // 	  $this ->db->where('namaobat', $namaobat);
	  // 	  $this ->db->where('stok', $stok);
	  // 	  $this ->db->where('harga', $harga);

   //       return $this->db->get($this->table);
	  	 
	  // }
	public function create($array_pasien)
	{
		return $this->db->insert('tbl_ibuhamil', $array_pasien);
	}

		public function get_id($id='')
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_ibuhamil')->row();
	}

	public function update($array_pasien='', $id='')
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_ibuhamil', $array_pasien);
	}
}