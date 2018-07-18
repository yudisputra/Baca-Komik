<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model {

	function get_subscribe(){
        $hasil=$this->db->get('komik');
        return $hasil->result();
    }

    function get_favorite($iduser){
    	$query = $this->db->query("Select f.idkomik_favorite,k.cover,k.namakomik FROM favorit as f INNER JOIN komik as k ON f.idkomik_favorite = k.idkomik WHERE f.iduser = ".$iduser);
		return $query->result();
    }

    function addFavorite($iduser,$idkomik)
    {
    	$object =  array(
				'iduser' => $iduser,
				'idkomik_favorite' => $idkomik
			);
			$this->db->insert('favorit', $object);
    }

    function deleteFavorite($iduser,$idkomik)
    {
    	$this->db->where('iduser', $iduser);
    	$this->db->where('idkomik_favorite', $idkomik);
        $this->db->delete('favorit');
    }

    function get_idfavorite($iduser){
        $query = $this->db->query("Select idkomik_favorite FROM favorit WHERE iduser = ".$iduser);
        return $query->result();
    }
  
}

/* End of file subscribe_model.php */
/* Location: ./application/models/subscribe_model.php */