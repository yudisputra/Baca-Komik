<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	public function index()
	{
 		 $query = $this->db->get('komik');
  		 return $query->result();
	}

	public function detail($id)
	{
 		 $this->db->where('idkomik', $id);
 		 $query = $this->db->get('komik');
  		return $query->result();
	}

	public function chapterkomik($id)
	{
 		 $this->db->where('fk_idkomik', $id);
 		 $query = $this->db->get('chapter');
  		return $query->result();
	}

	public function mangaterbaru()
	{
		$query = $this->db->query("Select * from chapter as c INNER JOIN komik as k ON k.idkomik=c.fk_idkomik ORDER BY tanggalrilis");
		return $query->result();
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */