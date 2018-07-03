<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_chapter extends CI_Controller {

    function __construct(){
    parent::__construct();  
    }

    public function index()
    {
        $this->load->view('admin/admin_chapter');
    }

    public function getAllchap()
    {
        $this->load->model('admin_chap');
        $result = $this->admin_chap->getAllchapter(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('admin_chap');
        $this->admin_chap->save();
    }

    public function delete()
    {
        $this->load->model('admin_chap');
        $id = $this->input->post('id'); 
        $this->admin_chap->delete($id);
    }

    public function update(){
        $this->load->model('admin_chap'); 
        $this->admin_chap->update();
    }
}