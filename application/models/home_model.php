<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	public function index()
	{
 		 $query = $this->db->get('komik');
  		 return $query->result();
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */