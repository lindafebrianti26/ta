<?php
class M_ibu extends CI_model{

public function get_all()
{
	return $this->db->get('tbl_ibumelahirkan')->result();
}

  // public function ceklogin($no, $namaobat, $stok, $harga)
  // {
  // 	 $this ->db->where('no',$no);
  // 	  $this ->db->where('namaobat', $namaobat);
  // 	  $this ->db->where('stok', $stok);
  // 	  $this ->db->where('harga', $harga);

//       return $this->db->get($this->table);
  	 
  // }
public function create($array_ibu)
{
	return $this->db->insert('tbl_ibumelahirkan', $array_ibu);
}

	public function get_id($id='')
{
	$this->db->where('id', $id);
	return $this->db->get('tbl_ibumelahirkan')->row();
}

public function update($array_ibu='', $id='')
{
	$this->db->where('id', $id);
	return $this->db->update('tbl_ibumelahirkan', $array_ibu);
}
}