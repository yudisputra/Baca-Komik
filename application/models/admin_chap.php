<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin_chap extends CI_Model {
	
	public function getAllchapter()
     {
        $query     = $this->db->get('chapter');

        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('chapter', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('idchapter'); 
        $data      = $this->input->post(); 
        $this->db->where('idchapter', $id)->update('chapter', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('idchapter'); 
        $this->db->where('idchapter', $id); 
        $this->db->delete('chapter');
    }
}