<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Model {

	public function login($username,$password)
	{
		$this->db->select('iduser,namauser,password,nickname');
        $this->db->from('user');
        $this->db->where('namauser', $username);
        $this->db->where('password', MD5($password));
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
	}
	

}

/* End of file user_login.php */
/* Location: ./application/models/user_login.php */