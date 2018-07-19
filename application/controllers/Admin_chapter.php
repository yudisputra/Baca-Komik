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

    public function ambiljudul()
    {
        $this->load->model('admin_model'); 
        $data['judulkomik']=$this->admin_model->getALLkomik();
        $this->load->view('admin/admin_tambahchapter',$data);
    }

    public function insertchapter()
    {
           $idkomik = $this->input->post('judulkomik');
           $volchapter = $this->input->post('volchapter');

           $this->load->model('admin_chap');
           $this->load->library('upload');

           $path = "./assets/images/Manga/".$idkomik;

            if(!is_dir($path)) //create the folder if it's not already exists
            {
                mkdir($path);
                // Here 0755 is permission of the folder to be created. 755 means you can do anything with the file or directory, and other users can read and execute it but not alter it. Suitable for programs and directories you want to make publicly available.
            }
            else
            {
                mkdir("./assets/images/Manga/".$idkomik."/".$volchapter);
            }

           $this->upload->initialize(array(
            "upload_path"   => "./assets/images/Manga/".$idkomik."/".$volchapter,
            "allowed_types" => "gif|jpg|png"
            ));

            if($this->upload->do_multi_upload("files")) 
            {
                // print_r($this->upload->get_multi_upload_data());
                $this->admin_chap->insertchapterbaru();
                $this->index();
            }
            else
            {
                $error = array('error'=> $this->upload->display_errors());
                print_r($error);
            }
    }
}