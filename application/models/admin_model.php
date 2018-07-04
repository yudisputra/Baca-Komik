<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
	
	public function getAllkomik()
     {
        $query     = $this->db->get('komik');

        if($query->num_rows()>0)
        {
            return $query->result();
        }
    }

    public function save() 
    { 
        $data      = $this->input->post(); 
        $this->db->insert('komik', $data); 
    } 

    public function update() 
    { 
        $id        = $this->input->post('idkomik'); 
        $data      = $this->input->post(); 
        $this->db->where('idkomik', $id)->update('komik', $data); 
    } 

    public function delete() 
    { 
        $id        = $this->input->post('idkomik'); 
        $this->db->where('idkomik', $id); 
        $this->db->delete('komik');
    }

    public function insertkomik()
    {
         $object = array('idkomik' => $this->input->post('idkomik'), 'namakomik' => $this->input->post('namakomik'), 'pengarang' => $this->input->post('pengarang'),'status' => $this->input->post('status'),'ringkasan' => $this->input->post('ringkasan'),'cover' => $this->upload->data('file_name'));
         $this->db->insert('komik', $object);
    }
}