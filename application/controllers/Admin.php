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
}