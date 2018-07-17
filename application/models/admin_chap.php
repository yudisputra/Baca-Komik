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

    public function insertchapter()
    {
         $object = array('idkomik' => $this->input->post('idkomik'), 'namakomik' => $this->input->post('namakomik'), 'pengarang' => $this->input->post('pengarang'),'status' => $this->input->post('status'),'ringkasan' => $this->input->post('ringkasan'),'cover' => $this->upload->data('file_name'));
         $this->db->insert('komik', $object);
    }

    public function insertchapterbaru()
    {
        $data = $this->upload->get_multi_upload_data('file_name');   
        $jumlah = count($data);
         $object = array('fk_idkomik' => $this->input->post('fk_idkomik'), 'volchapter' => $this->input->post('volchapter'), 'judulchapter' => $this->input->post('judulchapter'),'tanggalrilis' => $this->input->post('tanggalrilis'),'jum' => $jumlah);
         $this->db->insert('chapter', $object);
    }
}