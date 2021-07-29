<?php
class M_peserta extends CI_model{

public function get_all()
{
	return $this->db->get('tbl_peserta')->result();
}

  // public function ceklogin($no, $namaobat, $stok, $harga)
  // {
  // 	 $this ->db->where('no',$no);
  // 	  $this ->db->where('namaobat', $namaobat);
  // 	  $this ->db->where('stok', $stok);
  // 	  $this ->db->where('harga', $harga);

//       return $this->db->get($this->table);
  	 
  // }
public function create($array_peserta)
{
	return $this->db->insert('tbl_peserta', $array_peserta);
}

	public function get_id($id='')
{
	$this->db->where('id', $id);
	return $this->db->get('tbl_peserta')->row();
}

public function update($array_peserta='', $id='')
{
	$this->db->where('id', $id);
	return $this->db->update('tbl_peserta', $array_peserta);
}
}