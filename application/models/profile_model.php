<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	function getUser(){
		$query = $this->db->get('user');
  		return $query->result();
	}

	function getFavorite($id){
    	$query = $this->db->query("Select f.idkomik_favorite,k.cover,k.namakomik FROM favorit as f INNER JOIN komik as k ON f.idkomik_favorite = k.idkomik WHERE f.iduser = ".$id);
		return $query->result();
    }

    function getProfile($id){
    	$query = $this->db->query("Select * FROM user WHERE iduser = ".$id);
        return $query->result();
    }

    public function updateProfil($id)
        {   
            $tglLahirinput = $this->input->post('tanggalLahir');
            $tglLahir = new DateTime($tglLahirinput);
            $date=$tglLahir->format('Y-m-d');

            $object =  array(
                'namauser' => $this->input->post('username'),
                'nickname' => $this->input->post('nickname'),
                'email' => $this->input->post('email'),
                'tanggalLahir' => $date,
                'fotoprofile' => $this->upload->data('file_name')
            );
            $this->db->where('iduser=', $id);
            $this->db->update('user', $object);
        }   
    public function whereID($id)
        {
            $query = $this->db->query("Select * FROM user WHERE iduser = ".$id);
            return $query->result();
        }


}

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */