<?php
class M_kb extends CI_model{

public function get_all()
{
	return $this->db->get('tbl_kb')->result();
}

  // public function ceklogin($no, $namaobat, $stok, $harga)
  // {
  // 	 $this ->db->where('no',$no);
  // 	  $this ->db->where('namaobat', $namaobat);
  // 	  $this ->db->where('stok', $stok);
  // 	  $this ->db->where('harga', $harga);

//       return $this->db->get($this->table);
  	 
  // }
public function create($array_kb)
{
	return $this->db->insert('tbl_kb', $array_kb);
}

	public function get_id($id='')
{
	$this->db->where('id', $id);
	return $this->db->get('tbl_kb')->row();
}

public function update($array_kb='', $id='')
{
	$this->db->where('id', $id);
	return $this->db->update('tbl_kb', $array_kb);
}
}