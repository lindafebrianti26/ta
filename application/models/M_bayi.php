<?php
class M_bayi extends CI_model{

public function get_all()
{
	return $this->db->get('tbl_bayi')->result();
}

  // public function ceklogin($no, $namaobat, $stok, $harga)
  // {
  // 	 $this ->db->where('no',$no);
  // 	  $this ->db->where('namaobat', $namaobat);
  // 	  $this ->db->where('stok', $stok);
  // 	  $this ->db->where('harga', $harga);

//       return $this->db->get($this->table);
  	 
  // }
public function create($array_bayi)
{
	return $this->db->insert('tbl_bayi', $array_bayi);
}

	public function get_id($id='')
{
	$this->db->where('id', $id);
	return $this->db->get('tbl_bayi')->row();
}

public function update($array_bayi='', $id='')
{
	$this->db->where('id', $id);
	return $this->db->update('tbl_bayi', $array_bayi);
}
}