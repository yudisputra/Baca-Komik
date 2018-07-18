<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
	}

	public function index()
	{
		$this->load->view('user/u_dashboard');
	}

	public function profile()
	{
		$session_data = $this->session->userdata('logged_in');
   		$id = $session_data['iduser'];
		$data["profile"] = $this->profile_model->getProfile($id);
		$data["favorit"] = $this->profile_model->getFavorite($id);
		// $data["subscribe"]=$this->profile_model->getFavorite();
		$this->load->view('user/u_profile',$data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */