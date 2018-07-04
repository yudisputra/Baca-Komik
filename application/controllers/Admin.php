<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
    parent::__construct();  
    }

    public function index()
    {
        $this->load->view('admin/admin_komik');
    }

    public function getAllkomik()
    {
        $this->load->model('admin_model');
        $result = $this->admin_model->getAllkomik(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('admin_model');
        $this->admin_model->save();
    }

    public function delete()
    {
        $this->load->model('admin_model');
        $id = $this->input->post('id'); 
        $this->admin_model->delete($id);
    }

    public function update(){
        $this->load->model('admin_model'); 
        $this->admin_model->update();
    }

    public function create()
    {
        $this->load->model('admin_model');
        $this->form_validation->set_rules('namakomik','Nama Komik','trim|required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('admin/admin_tambahkomik');
        }
        else
        {
            $this->admin_model->insertkomik();
            $this->load->view('admin/admin_komik');
        }
    }
}