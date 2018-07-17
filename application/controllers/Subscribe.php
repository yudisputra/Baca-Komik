<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('subscribe_model');
	}
	public function index()
	{
		$this->load->view('user/u_subscribe');	
	}
	
	public function getIdUser($iduser){
		$data['subscribe']=$this->subscribe_model->get_favorite($iduser);
		$this->load->view('user/u_subscribe',$data);
	}
}

/* End of file Subscribe.php */
/* Location: ./application/controllers/Subscribe.php */