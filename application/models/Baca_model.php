<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca_model extends CI_Model {

	public function getkom($id,$chapter)
	{
		$this->db->select('jum');
        $this->db->from('chapter');
        $this->db->where('fk_idkomik', $id);
        $this->db->where('volchapter', $chapter);
        $query = $this->db->get();
        return $query->result();
	}
	

}

/* End of file admin_login.php */
/* Location: ./application/controllers/admin_login.php */